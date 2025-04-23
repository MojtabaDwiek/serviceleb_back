<?php

namespace App\Http\Controllers;

use App\Models\Service; 

class ServiceController extends Controller
{
    public function index()
    {
        return Service::select('id', 'name')->get();
    }
}