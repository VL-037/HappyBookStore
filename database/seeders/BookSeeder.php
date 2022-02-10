<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['id' => 1, 'category_id' => 3, 'title' => 'Going to the Ships'],
            ['id' => 2, 'category_id' => 12, 'title' => 'Fish of Freedom'],
            ['id' => 3, 'category_id' => 6, 'title' => 'Element of the Sea'],
            ['id' => 4, 'category_id' => 6, 'title' => 'Kings and Rebels'],
            ['id' => 5, 'category_id' => 3, 'title' => 'Blacksmiths and Women'],
            ['id' => 6, 'category_id' => 8, 'title' => 'Means of the Ocean'],
            ['id' => 7, 'category_id' => 4, 'title' => 'Vultures and Aliens'],
            ['id' => 8, 'category_id' => 1, 'title' => 'Spy of Sorrow'],
            ['id' => 9, 'category_id' => 2, 'title' => 'Child of the River'],
            ['id' => 10, 'category_id' => 5, 'title' => 'Tree Without Courage'],
            ['id' => 11, 'category_id' => 4, 'title' => 'Enemies of Perfection'],
            ['id' => 12, 'category_id' => 5, 'title' => 'Wives and Aliens'],
            ['id' => 13, 'category_id' => 7, 'title' => 'Certainty of Water'],
            ['id' => 14, 'category_id' => 11, 'title' => 'Lion of Gold'],
            ['id' => 15, 'category_id' => 3, 'title' => 'Blacksmiths of the Stockades'],
            ['id' => 16, 'category_id' => 1, 'title' => 'Assassins of Dreams'],
            ['id' => 17, 'category_id' => 10, 'title' => 'Hurting My Future'],
            ['id' => 18, 'category_id' => 2, 'title' => 'Warriors Without Honor'],
            ['id' => 19, 'category_id' => 7, 'title' => 'Possessed by the Mist'],
            ['id' => 20, 'category_id' => 8, 'title' => 'Vanishing Into My Dreams'],
        ]);
    }
}