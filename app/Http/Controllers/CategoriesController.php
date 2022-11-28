<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategories;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    //
    public function index(Request $request){
        $book_list = Categories::find($request->id);
        // $getbook = Book::all()->where('categories.id','=','BookCategories.book_id');
        $getbook = DB::table('categories')->join('book_categories', 'categories.id',
                                                 '=', 'book_categories.category_id')
        ->join('books','book_categories.book_id','=','books.id')
        ->where('categories.id', '=', $request->id)->get();
        return view('category', compact('book_list','getbook'));
    }
}
