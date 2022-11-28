<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    //
    public function index(){
        $book_data = Book::all();
        
        return view('home', compact('book_data'));
    }

    public function index2(){
        return view('contact');
    }

    public function book_details($id){
        
        $details = DB::table('books')->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->where('books.id','=', $id)->get();
        $bookdata = Book::all();

        return view('book_detail',compact('details','bookdata'));
    }
}
