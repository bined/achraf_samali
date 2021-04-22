<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marchandise;
use App\Personnel;

class IndexController extends Controller
{

    public function saveMarchandise(Request $request){

        $marchandise = new Marchandise();
        $marchandise->nom = $request->get('firstName');
        $marchandise->prenom = $request->get('lastName');
        $marchandise->email = $request->get('email');
        $marchandise->phone = $request->get('phone');
        $marchandise->type = $request->get('type');
        $marchandise->date = $request->get('date');
        $marchandise->tonnage = $request->get('tonnage');
        $marchandise->fragile = $request->get('fragile');
        $marchandise->depart = $request->get('depart');
        $marchandise->arrive = $request->get('arrive');
        $marchandise->save();

        return response()->json(['success' => true]);
    }

    public function savePersonnel(Request $request){

        $personnel = new Personnel();
        $personnel->nom = $request->get('firstName');
        $personnel->prenom = $request->get('lastName');
        $personnel->email = $request->get('email');
        $personnel->phone = $request->get('phone');
        $personnel->transferts = $request->get('transferts');
        $personnel->passagers = $request->get('passagers');
        $personnel->heures = $request->get('heures');
        $personnel->depart = $request->get('depart');
        $personnel->arrive = $request->get('arrive');
        $personnel->save();

        return response()->json(['success' => true]);
    }
}
