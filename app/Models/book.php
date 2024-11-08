<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'publisher', 'publication', 'price', 'quantity', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
}
}