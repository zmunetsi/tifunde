<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\HasBookings;
use App\Appointment;

class JobSeeker extends User
{
  
    use HasBookings;
    protected $table = 'users';

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
    
}
