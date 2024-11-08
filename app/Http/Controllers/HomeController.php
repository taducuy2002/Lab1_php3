<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index () {
    $posts = DB::table('books')->latest('id')->orderBy('price', 'desc')  // Sắp xếp theo giá giảm dần (giá cao nhất)
    ->limit(8)  // Lấy 8 bản ghi có giá cao nhất
    ->union(
        DB::table('books')
            ->orderBy('price', 'asc')  // Sắp xếp theo giá tăng dần (giá thấp nhất)
            ->limit(8)  // Lấy 8 bản ghi có giá thấp nhất
    )->get();
    return view('home', compact('posts'));
   }
}
