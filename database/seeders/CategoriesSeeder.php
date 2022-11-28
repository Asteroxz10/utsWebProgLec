<?php

namespace Database\Seeders;

use App\Models\Categories;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categories::create([
            'name' => 'Adventure Stories',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
       
        Categories::create([
            'name' => 'Fantasy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Categories::create([
            'name' => 'Horror',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Categories::create([
            'name' => 'Crime',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
