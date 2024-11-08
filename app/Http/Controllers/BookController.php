<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function show($id) {
        $post = DB::table('books')->find($id);
         if($post == null) {
            return redirect(404);
         }

         return view('detail', compact('post'));    
    }

    public function list($id) {
        $posts = DB::table('books')->join('categories', 'books.category_id', 'categories.id')
        ->select(['books.*', 'name'])
        ->where('category_id', $id)->latest('id')->paginate(8);
        return view('books', compact('books'));
    }
}
