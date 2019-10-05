<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2016; $i <= 2018; $i++) {
            DB::table('years')->insert([
                'year' => $i,
            ]);
        }
    }
}
