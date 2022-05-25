<?php

namespace App\Http\Controllers;

use App\Models\Measurements;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    public function store(Request $request){
        //criando o objeto Medidas
        $measurements = new Measurements();

        // $measurements->date = $request->date;

        //alterando os atributos do objeto

        Measurements::create($request)
        // $measurements = $request->all();

        // $measurements->save();
    }
}
