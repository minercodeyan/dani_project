<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Faker\Provider\Fakecar;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new Fakecar($faker));

        $productsArray = [];


        for ($i=1; $i< 200; $i++) {

            $brand = '';
            switch ($i%8) {
                case 0:
                    $brand =  'BMW';
                    break;
                case 1:
                    $brand =  'Audi';
                    break;
                case 2:
                    $brand =  'Mercedes-Benz';
                    break;
                case 3:
                    $brand =  'Nissan';
                    break;
                case 4:
                    $brand =  'Jeep';
                    break;
                case 5:
                    $brand =  'Hyundai';
                    break;
                case 6:
                    $brand =  'Ford';
                    break;
                case 7:
                    $brand =  'Fiat';
                    break;
            }

            $productsArray[] = [
                'name' =>  $brand.  ' ' . $faker->vehicleModel($brand),
                'image' => 'prod'.$faker->numberBetween(1,6).'.jpg',
                'description' => $faker->paragraph(2, true),
                'price' => $faker->numberBetween(10000,1000000),
                'catalog_id' => $faker->numberBetween(1,8),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ];
        }
        DB::table('products')->truncate();
        DB::table('products')->insert($productsArray);
    }
}
