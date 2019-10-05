<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Data for 2016 year
         * */
        DB::table('categories')->insert([
            'title' => 'cat1',
            'value' => 4,
            'maxValue' => 10,
            'year_id' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat2',
            'value' => 2,
            'maxValue' => 10,
            'year_id' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat3',
            'value' => 6,
            'maxValue' => 12,
            'year_id' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat4',
            'value' => 4,
            'maxValue' => 10,
            'year_id' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat5',
            'value' => 6,
            'maxValue' => 10,
            'year_id' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat6',
            'value' => 10,
            'maxValue' => 10,
            'year_id' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat7',
            'value' => 1,
            'maxValue' => 10,
            'year_id' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat8',
            'value' => 4,
            'maxValue' => 10,
            'year_id' => 1,
        ]);

        /*
         * Data for 2017 year
         * */
        DB::table('categories')->insert([
            'title' => 'cat1',
            'value' => 4,
            'maxValue' => 10,
            'year_id' => 2,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat2',
            'value' => 2,
            'maxValue' => 10,
            'year_id' => 2,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat3',
            'value' => 7,
            'maxValue' => 12,
            'year_id' => 2,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat4',
            'value' => 4,
            'maxValue' => 10,
            'year_id' => 2,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat5',
            'value' => 8,
            'maxValue' => 10,
            'year_id' => 2,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat6',
            'value' => 3,
            'maxValue' => 10,
            'year_id' => 2,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat7',
            'value' => 4,
            'maxValue' => 10,
            'year_id' => 2,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat8',
            'value' => 4,
            'maxValue' => 10,
            'year_id' => 2,
        ]);

        /*
         * Data for 2018 year
         * */
        DB::table('categories')->insert([
            'title' => 'cat1',
            'value' => 2,
            'maxValue' => 10,
            'year_id' => 3,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat2',
            'value' => 8,
            'maxValue' => 10,
            'year_id' => 3,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat3',
            'value' => 1,
            'maxValue' => 12,
            'year_id' => 3,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat4',
            'value' => 6,
            'maxValue' => 10,
            'year_id' => 3,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat5',
            'value' => 8,
            'maxValue' => 10,
            'year_id' => 3,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat6',
            'value' => 3,
            'maxValue' => 10,
            'year_id' => 3,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat7',
            'value' => 9,
            'maxValue' => 10,
            'year_id' => 3,
        ]);
        DB::table('categories')->insert([
            'title' => 'cat8',
            'value' => 10,
            'maxValue' => 10,
            'year_id' => 3,
        ]);
    }
}
