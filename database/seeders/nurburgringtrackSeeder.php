<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nurburgringtrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Nurburgringtracks')->insert([

            [
            'Name' => 'Porsche GT2RS',
            'Horsepower' => '700HP',
            'Lap_Time' => '6:47,25',
            ],

            [
            'Name' => 'Mercedes AMG-GT Black Series',
            'Horsepower' => '720HP',
            'Lap_Time' => '6:43,61',
            ],

            [
            'Name' => 'Huracan Performante',
            'Horsepower' => '640HP',
            'Lap_Time' => '6:52,01',
            ]


            ]);



        //
    }
}
