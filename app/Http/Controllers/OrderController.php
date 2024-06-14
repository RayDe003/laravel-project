<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function showOrderForm()
    {
        $clients = Clients::all();
        $services = Service::all();
        return view('order-form', compact('clients', 'services'));
    }

    public function  storeOrder(Request $request){

        $validatedData = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'due_date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $validatedData['user_id'] = Auth::id();

        Order::create($validatedData);

        return redirect()->route('second');
    }
}
