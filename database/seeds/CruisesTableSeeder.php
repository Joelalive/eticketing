<?php

use Illuminate\Database\Seeder;
use App\Cruise;

class CruisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cruise::create([
            'name' => 'Sunset Cruise',
            'seats' => '100',
            'price' => '2000',
            'tax' => '18',
            'boarding' => '03:30 PM',
            'departure' => '04:00 PM'
        ]);
        Cruise::create([
            'name' => 'Dinner Cruise',
            'seats' => '170',
            'price' => '2500',
            'tax' => '18',
            'boarding' => '06:30 PM',
            'departure' => '07:00 PM' 
        ]);
        Cruise::create([
            'name' => 'Private Charter',
            'seats' => '90',
            'price' => '3500',
            'tax' => '18',
            'boarding' => '05:30 PM',
            'departure' => '06:00 PM'  
        ]);
    }
}
