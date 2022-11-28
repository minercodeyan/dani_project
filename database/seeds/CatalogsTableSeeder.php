<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Catalog;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->truncate();
        DB::table('catalogs')->insert([
            [
                'name' => 'Crossover',
                'image' => 'appliances_cat.jpg',
                'description' => 'description',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sports Car',
                'image' => 'furniture_cat.jpg',
                'description' => 'description',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Coupe',
                'image' => 'food_cat.jpg',
                'description' => 'description',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Minivan',
                'image' => 'jewelry_cat.jpg',
                'description' => 'description',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Station Wagon',
                'image' => 'tv_cat.jpg',
                'description' => 'description for TV',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pickup Truck',
                'image' => 'refrigerators_cat.jpg',
                'description' => 'description',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cellphones',
                'image' => 'cellphones_cat.jpg',
                'description' => 'description',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sedan',
                'image' => 'cellphones_cat.jpg',
                'description' => 'description',
                'parent_id' => NULL,
                'priority' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
