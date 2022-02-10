<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'category' => 'Fantasy'],
            ['id' => 2, 'category' => 'Adventure'],
            ['id' => 3, 'category' => 'Horror'],
            ['id' => 4, 'category' => 'Children'],
            ['id' => 5, 'category' => 'Contemporary'],
            ['id' => 6, 'category' => 'Science Fiction'],
            ['id' => 7, 'category' => 'Dystopian'],
            ['id' => 8, 'category' => 'Thriller'],
            ['id' => 9, 'category' => 'Romance'],
            ['id' => 10, 'category' => 'Mystery'],
            ['id' => 11, 'category' => 'Paranormal'],
            ['id' => 12, 'category' => 'Historical Fiction']
        ]);
    }
}
