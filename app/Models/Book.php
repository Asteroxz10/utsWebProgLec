<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
   public function publisher_name(){
       return $this->belongsTo(Publishers::class, 'id');
   }
}
