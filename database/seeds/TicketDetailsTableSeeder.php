<?php

use Illuminate\Database\Seeder;
use App\TicketDetails;

class TicketDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TicketDetails::create([
            'pnr' => '12345',
            'date' => '2019-06-12',
            'cruise' => 'Dinner Cruise',
            'seats' => '3',
            'contact' => '9940123896',
            'payment' => 'cash',
            'remarks' => 'Andaman Tour'
                    ]);
    }
}
