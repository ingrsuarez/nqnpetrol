<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;


class ClientController extends Controller
{
    public function new()
    {   
        $clients = Client::all();
        
        return view('client.new',compact('clients'));
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = strtolower($request->name);
        $client->company_id = $request->company_id;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = strtolower($request->address);
        $client->postal_code = $request->postal_code;
        $client->city = strtolower($request->city);
        $client->province = strtolower($request->province);
        $client->iva = $request->iva;
        $client->category = $request->category;
        $client->status = $request->status;

        $client->save();
        return redirect()->back();
    }

    public function edit(Client $client)
    {

        return view('client.edit',compact('client'));
    }
}
