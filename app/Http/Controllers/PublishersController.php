<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publishers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublishersController extends Controller
{
    //
    public function index(Request $request){
        $publisher_data = Publishers::find($request->id);
        $details = Book::all();
        return view('publishers', compact('publisher_data','details'));
    }
    
    public function book_details($id){
        
        $details = DB::table('books')->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->where('categories.id','=', $id)->get();
        

        return view('/book/{id}',compact('details'));
    }
}
