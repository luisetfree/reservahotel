<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['detail','startdate','enddate','adult','child','date','usuario_id','room_id'];
}
