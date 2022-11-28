<?php

use Illuminate\Database\Seeder;
use App\Unit;
use App\Property;
use Carbon\Carbon;

class PropertyValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        DB::table('property_values')->truncate();

        $property_id = Property::where('name', 'manufacturer')->first()->id;
        DB::table('property_values')->insert([
            [
                'property_id' => $property_id,
                'value' => 'BMW',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => 'Audi',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => 'Mercedes-Benz',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => 'Nissan',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => 'Jeep',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => 'Hyundai',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => 'Ford',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => 'Fiat',
                'unit_id' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
        $property_id = Property::where('name', 'weight')->first()->id;
        $unit_kg = Unit::where('code', 'KG')->first()->id;
        DB::table('property_values')->insert([
            [
                'property_id' => $property_id,
                'value' => '1000',
                'unit_id' => $unit_kg,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => '5000',
                'unit_id' => $unit_kg,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => '1000',
                'unit_id' => $unit_kg,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => '2000',
                'unit_id' => $unit_kg,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => '5000',
                'unit_id' => $unit_kg,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'property_id' => $property_id,
                'value' => '9988.5',
                'unit_id' => $unit_kg,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
