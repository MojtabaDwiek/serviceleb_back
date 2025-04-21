<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $fillable = ['name', 'phone', 'service_id', 'location_id'];
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
