<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){
       User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make('password'),
           'email_verified_at' => now(),
       ]);

       return back()->with('success', 'new data add');
    }
}
