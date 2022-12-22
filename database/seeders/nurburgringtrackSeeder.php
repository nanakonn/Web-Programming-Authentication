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
            'Img_Url' => 'https://wallpapercave.com/wp/wp2430907.jpg'
            ],

            [
            'Name' => 'Mercedes AMG-GT Black Series',
            'Horsepower' => '720HP',
            'Lap_Time' => '6:43,61',
            'Img_Url' => 'https://cdn.motor1.com/images/mgl/42O9z/s3/mercedes-amg-gt-black-series.jpg'
            ],

            [
            'Name' => 'Huracan Performante',
            'Horsepower' => '640HP',
            'Lap_Time' => '6:52,01',
            'Img_Url' => 'https://hips.hearstapps.com/hmg-prod/amv-prod-cad-assets/images/18q1/699327/2018-lamborghini-huracan-performante-test-review-car-and-driver-photo-702889-s-original.jpg'
            ]


            ]);



        //
    }
}
