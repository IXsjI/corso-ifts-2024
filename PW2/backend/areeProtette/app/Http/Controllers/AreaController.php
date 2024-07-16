<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Specie;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['response' => 'True','areas'=> Area::all()]);
    }

    public function searchSpecies(string $id)
    {
        return response()->json([
            'specie', Specie::query()->where('s_area_id', $id)->get()
        ]);
    }


}
