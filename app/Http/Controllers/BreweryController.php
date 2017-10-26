<?php

namespace App\Http\Controllers;

use App\Cvrapi\Cvrapi;
use Illuminate\Http\Request;

class BreweryController extends Controller
{
    public function index(Request $request, Cvrapi $api)
    {
        return response()->json($api->search($request->get('name')));
    }
}
