<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'surname',
        'phone_number',
        'email',
    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
