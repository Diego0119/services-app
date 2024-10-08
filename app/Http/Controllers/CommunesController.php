<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;

class CommunesController extends Controller
{
    public function index()
    {
        //
    }

    public function getCommunes($regionId)
    {
        $communes = Commune::where('region_id', $regionId)->get();
        return response()->json($communes);
    }
}
