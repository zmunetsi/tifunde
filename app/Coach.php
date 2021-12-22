<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Appointment;

class Coach extends User
{

    protected $table = 'users';

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    
   
}
