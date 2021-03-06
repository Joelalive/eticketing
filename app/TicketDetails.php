<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketDetails extends Model
{
    protected $guarded = [];

    public function tickets(){
        $this->hasMany(Ticket::class);
    }

}
