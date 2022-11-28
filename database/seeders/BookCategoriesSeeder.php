<?php

namespace Database\Seeders;

use App\Models\BookCategories;
use Illuminate\Database\Seeder;

class BookCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BookCategories::create([
            'book_id' => '1',
            'category_id' => '1',
        ]);

        BookCategories::create([
            'book_id' => '2',
            'category_id' => '3',
        ]);

        BookCategories::create([
            'book_id' => '3',
            'category_id' => '2',
        ]);

        BookCategories::create([
            'book_id' => '4',
            'category_id' => '3',
        ]);

        BookCategories::create([
            'book_id' => '5',
            'category_id' => '4',
        ]);
    }
}
