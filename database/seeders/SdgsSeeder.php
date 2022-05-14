<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SdgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sdgs')->delete();

        DB::table('sdgs')->insert([
            'number' => 1,
            'name' => 'Kaotada vaesus',
            'description' => 'Kirjeldus',
            'created_at' => Carbon::now(),
        ]);

        DB::table('sdgs')->insert([
            'number' => 2,
            'name' => 'Kaotada nälg',
            'description' => 'Kirjeldus',
            'created_at' => Carbon::now(),
        ]);

        DB::table('sdgs')->insert([
            'number' => 3,
            'name' => 'Hea tervis ja heaolu',
            'description' => 'Kirjeldus',
            'created_at' => Carbon::now(),
        ]);
    }
}
