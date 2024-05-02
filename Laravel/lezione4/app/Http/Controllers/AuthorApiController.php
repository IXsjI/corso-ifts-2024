<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AuthorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response()->json(['message' => 'index']);
        $authors = DB::select('select * from authors');
        return response()->json([
            'authors' => $authors,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //-

        $validator = Validator::make($request->all(),[
            'name' => ['required', 'min:3'],
            //si può anche scrivere
            'surname' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],400);
        }

        $validatedData = $validator->validate();

        DB::insert('INSERT INTO `authors` (`name`, `surname`) VALUES (?,?)',[
            $validatedData['name'], $validatedData['surname']
        ]);

        return response()->json(['message' => 'autore inserito con successo']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //-
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:5'],
            'surname' => 'required|min:5',
        ]);
        if ($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $validatedData = $validator->validate();

        $affected = DB::update('UPDATE authors SET `name`=?, `surname`=? WHERE `id`=?',[
            $validatedData['name'],$validatedData['surname'], $id
        ]);
        return response()->json(['message' => "update ok, aggiornati n.{$affected} autori"]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //-
        DB::delete('DELETE FROM authors WHERE `id` = ?', [$id]);
        return response()->json(['message' => 'cancellato correttamente']);

    }
}