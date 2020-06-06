<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function venue()
    {
        // Relations, a venue has more events but an event belongs to one venue
        return $this->belongsTo('\App\Venue');
    }
}
