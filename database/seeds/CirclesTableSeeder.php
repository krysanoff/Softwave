<?php

use Illuminate\Database\Seeder;

class CirclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('circles')->insert([
            'value' => 56,
            'year_id' => 1,
        ]);
        DB::table('circles')->insert([
            'value' => 30,
            'year_id' => 1,
        ]);

        DB::table('circles')->insert([
            'value' => 50,
            'year_id' => 2,
        ]);
        DB::table('circles')->insert([
            'value' => 89,
            'year_id' => 2,
        ]);

        DB::table('circles')->insert([
            'value' => 30,
            'year_id' => 3,
        ]);
        DB::table('circles')->insert([
            'value' => 70,
            'year_id' => 3,
        ]);
    }
}
