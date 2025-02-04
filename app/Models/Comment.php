<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
   protected $guarded = false;

   public function user(): void
   {
       $this->belongsTo(User::class);
   }
   public function product(): void
   {
       $this->belongsTo(Product::class);
   }
}
