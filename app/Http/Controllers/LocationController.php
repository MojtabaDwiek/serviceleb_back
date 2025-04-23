<?php

namespace App\Http\Controllers;

use App\Models\Location; 
use Illuminate\Http\Request;  

class LocationController extends Controller
{
    /**
     * Get locations that have technicians providing a specific service
     *
     * @param int $serviceId The ID of the service type
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function byService($serviceId)
{
    return Location::whereHas('technicians', function($q) use ($serviceId) {
        $q->where('service_id', $serviceId);  // Changed from service_type_id to service_id
    })->get(['id', 'name']);
}
}