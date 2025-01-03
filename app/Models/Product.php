<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'price',
        'discount',
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id');
    }
}
