<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use Illuminate\Http\Request; // Optional for request handling

class TechnicianController extends Controller
{
    /**
     * Get technicians by service type and location
     *
     * @param int $serviceId
     * @param int $locationId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function byServiceAndLocation($serviceId, $locationId)
    {
        return Technician::with('service')
            ->where('service_id', $serviceId)
            ->where('location_id', $locationId)
            ->get(['id', 'name', 'phone', 'service_id']);
    }
}