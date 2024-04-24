<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    //per ritornare 1 modello con il suo brand
    //Car::with('brand')->where('id',1)->get()
    //get serve per trasformare la query in una collection (dati)
    //all(), find(), first(), findOrFail(), firstOrFail() -> non richiedono la get()
    //where(), with() .. richiedono la get()
    //per ritornare tutti i modelli
    //Car::all();
    //per ritornare tutti i modelli con il brand
    //Car::with('brand')->get()
    //per recuperare tutti i modelli con hp > 20 e brand = 1
    //Car::query()->where('brand_id', 1)->where('hp', '>', '20')->get()
    //per creare un modello
    //Car::create(['name' => 'Classe A', 'hp' => '115', 'brand_id' => 1]);
/*
 $classeA = App\Models\Car::find(5)
= App\Models\Car {#6006
    id: 5,
    name: "Classe A",
    hp: "115",
    brand_id: 1,
    created_at: "2024-04-18 09:05:20",
    updated_at: "2024-04-18 09:05:20",
  }

> $classeA->hp = '125'
= "125"

> $classeA->save()
= true
*/
/*
App\Models\Car::where('id',5)->update(['hp' => '125']);
*/
/*
$classeA = App\Models\Car::find(5)
= App\Models\Car {#6006
    id: 5,
    name: "Classe A",
    hp: "115",
    brand_id: 1,
    created_at: "2024-04-18 09:05:20",
    updated_at: "2024-04-18 09:05:20",
  }

> $classeA->delete()
= true
*/
/*
App\Models\Car::where('id',5)->delete();
*/

}
