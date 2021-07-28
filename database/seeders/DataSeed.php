<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('encrypts')->insert([
            'title'=>Str::random(225),
            'Description'=>Str::random(10)
        ]);
    }

}
