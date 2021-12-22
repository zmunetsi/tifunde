<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\Bookable;
use App\Coach;
use App\JobSeeker;


class Appointment extends Model
{
    use Bookable;

    protected $fillable = [
        'coach_id', 'job_seeker_id', 'status', 'appointment_type', 'appointment_topics', 'notes' 
    ];
    
    public function coach()
    {
        return $this->belongsTo('App\Coach');
    }

    public function jobSeeker()
    {
        return $this->belongsTo('App\JobSeeker');
    }

    public function getRateModel(){

    }
    public function getAvailabilityModel(){

    }
    public function getBookingModel(){
        
    }
    
}
