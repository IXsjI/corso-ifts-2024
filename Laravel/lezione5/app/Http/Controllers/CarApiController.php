<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;

class CarApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['cars', Car::with('brand')->get()]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        // $insertedData = $request->only(['name', 'hp', 'brand_id']);
        $insertedData = $request->validated();
        $ret = Car::create($insertedData);
        return response()->json([
            'message' => 'Car created successfully.',
            'id' => $ret
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'car' => Car::query()->with('brand')->where('id', $id)->firstOrFail(),
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, string $id)
    {
        //implementare la validazione
        // $updatedData = $request->only(['name', 'hp', 'brand_id']);
        $updatedData = $request->validated();
        $ret = Car::query()->where('id', $id)->update($updatedData);
        return response()->json([
            'message' => 'Car updated successfully.'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return response()->json([
            'message' => 'Product deleted successfully'
        ]);
    }
}
