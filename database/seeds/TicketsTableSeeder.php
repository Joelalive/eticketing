<?php

use Illuminate\Database\Seeder;
use App\Ticket;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void           
     */
    public function run()
    {
        Ticket::create([
            'ticket_id' => 1,
            'pnr' => '12345',
            'name' => 'Ram',
            'age' => '34'
                    ]);

        Ticket::create([
            'ticket_id' => 1,
            'pnr' => '12345',
            'name' => 'Joel',
            'age' => '25'
                    ]);

        Ticket::create([
            'ticket_id' => 1,
            'pnr' => '12345',
            'name' => 'sarath',
            'age' => '26'
                    ]);
    }
}
