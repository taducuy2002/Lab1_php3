<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function books()
    {
        return $this->hasMany(Book::class);  // Mối quan hệ 1-n với bảng books
    }
}
