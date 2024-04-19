<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControll extends Controller
{
    public function index(){
        return response()->json(
            ['message' => 'index-controller']
            ,200);
    }
}
