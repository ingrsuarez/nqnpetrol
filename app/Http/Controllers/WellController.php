<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Well;
use App\Models\User;

class WellController extends Controller
{
    public function dashboard()
    {   
        $wells = Well::all();
        $clients = Client::all();
        return view('well.dashboard',compact('clients','wells'));
    }

    public function nuevo()
    {   
        $wells = Well::all();
        $clients = Client::all();
        return view('well.nuevo',compact('clients','wells'));
    }

    public function store(Request $request)
    {
        $well = new Well;
        														
        $well->name = $request->name;
        $well->location = $request->location;
        $well->client_id = $request->client_id;
        $well->type = $request->type;
        $well->oilfield = $request->oilfield;
        $well->battery = $request->battery;
        $well->water = $request->water;
        $well->oil = $request->oil;
        $well->gas = $request->gas;
        $well->water_density = $request->water_density;
        $well->oil_density = $request->oil_density;
        $well->gas_gravity = $request->gas_gravity;
        $well->viscosity = $request->viscosity;
        $well->co2 = $request->co2;
        $well->n2 = $request->n2;
        $well->h2s = $request->h2s;
        $well->c1 = $request->c1;
        $well->c2 = $request->c2;
        $well->ic4 = $request->ic4;
        $well->ic5 = $request->ic5;
        $well->nc = $request->nc;
        $well->c6 = $request->c6;  
        $well->surface_temp = $request->surface_temp;
        $well->bottom_temp = $request->bottom_temp;
        $well->average_joint = $request->average_joint;
        $well->pump_depth = $request->pump_depth;
        $well->plugback = $request->plugback;
        $well->seating_nipple = $request->seating_nipple;
        $well->tubing_anchor = $request->tubing_anchor;
        $well->rod_diameter = $request->rod_diameter;
        $well->rod_length = $request->rod_length;  
        $well->manufacturer_unit = $request->manufacturer_unit;
        $well->api_unit = $request->api_unit;
        $well->motor_type = $request->motor_type;
        $well->motor_power = $request->motor_power;
        $well->average_joint = $request->average_joint;

        $well->save();

        return redirect()->back();
    }

    public function edit(Well $well)
    {   

        $clients = Client::all();
        return view('well.edit',compact('clients','well'));
    }

    public function update(Request $request)
    {
        
        $well = Well::find($request->well_id);
        														
        $well->name = $request->name;
        $well->location = $request->location;
        $well->client_id = $request->client_id;
        $well->type = $request->type;
        $well->oilfield = $request->oilfield;
        $well->battery = $request->battery;
        $well->water = $request->water;
        $well->oil = $request->oil;
        $well->gas = $request->gas;
        $well->water_density = $request->water_density;
        $well->oil_density = $request->oil_density;
        $well->gas_gravity = $request->gas_gravity;
        $well->viscosity = $request->viscosity;
        $well->co2 = $request->co2;
        $well->n2 = $request->n2;
        $well->h2s = $request->h2s;
        $well->c1 = $request->c1;
        $well->c2 = $request->c2;
        $well->ic4 = $request->ic4;
        $well->ic5 = $request->ic5;
        $well->nc = $request->nc;
        $well->c6 = $request->c6;  
        $well->surface_temp = $request->surface_temp;
        $well->bottom_temp = $request->bottom_temp;
        $well->average_joint = $request->average_joint;
        $well->pump_depth = $request->pump_depth;
        $well->plugback = $request->plugback;
        $well->seating_nipple = $request->seating_nipple;
        $well->tubing_anchor = $request->tubing_anchor;
        $well->rod_diameter = $request->rod_diameter;
        $well->rod_length = $request->rod_length;  
        $well->manufacturer_unit = $request->manufacturer_unit;
        $well->api_unit = $request->api_unit;
        $well->motor_type = $request->motor_type;
        $well->motor_power = $request->motor_power;
        $well->average_joint = $request->average_joint;

        $well->save();

        return redirect()->back();
    }


    public function list()
    {   
        $wells = Well::all();
        $clients = Client::all();
        return view('well.list',compact('clients','wells'));
    }
}
