<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ProductPropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        DB::table('product_property')->truncate();
        $faker = Faker::create();
        $data_array = [];
        $pId = 0;
        for ($i = 1; $i < 200; $i++) {
            switch ($i%8) {
                case 0:
                    $pId=1;
                    break;
                case 1:
                    $pId=2;
                    break;
                case 2:
                    $pId=3;
                    break;
                case 3:
                    $pId=4;
                    break;
                case 4:
                    $pId=5;
                    break;
                case 5:
                    $pId=6;
                    break;
                case 6:
                    $pId=7;
                    break;
                case 7:
                    $pId=8;
                    break;
            }
                $data_array[] = [
                    'property_value_id' => $pId,
                    'product_id' => $i,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ];

        }
        DB::table('product_property')->insert($data_array);
    }
}
