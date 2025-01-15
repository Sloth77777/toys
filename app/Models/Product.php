<?php

declare(strict_types=1);

namespace App\Models;

//use App\Models\Trait\HasSlug; // нужно будет включить
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
//    use HasSlug;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'product_id');
    }

}
