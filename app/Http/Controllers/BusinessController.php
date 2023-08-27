<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
//use Stancl\Tenancy\Database\Models\Tenant;

class BusinessController extends Controller
{

    public function showBusiness(){

        $tenant = Tenant::all();

        return view('welcome',[
            'tenant' => $tenant,
        ]);
    }
    public function submitForm(Request $request)
    {
        $tenant = Tenant::create(['id' => $request->business_name]);
        $tenant->domains()->create(['domain' => $request->business_name.'.localhost']);

        return back()->with('message', 'your business is created');


    }
}
