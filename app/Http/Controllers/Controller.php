<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Stancl\Tenancy\Database\Models\Tenant;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showUser(){
        $alluser = \App\Models\User::all();
        $tenantId = tenant('id');
        $tenant = Tenant::find($tenantId);

        return view('showuser',[
            'users' => $alluser,
            'tenant' => $tenant,
        ]);
    }
}
