<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class CreateClient extends Controller
{
    public function showChoosePage(){
        return view('second');
    }

    public function showClientForm()
    {
        return view('client');
    }

    public function client(Request $request){

        $client = Clients::create([
            'name' => $request -> name,
            'surname' => $request -> surname,
            'patronymic' => $request -> patronymic,
        ]);

        return redirect()->route('second');
    }
}
