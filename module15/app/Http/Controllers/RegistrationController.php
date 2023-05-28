<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
class RegistrationController extends Controller
{
    public function register(RegistrationRequest $request)
    {
        dd($request->errors());
       // print_r($request->input());return;
        // $validated=$request->validate([
        //     'name' => 'required|string|min:2',
        //     'email' => 'required|email',
        //     'password' => 'required|string|min:4',
        // ]);
        // $user = User::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'password' => bcrypt($request->input('password')),
        // ]);
    
        // // Additional logic...
    
        // return response()->json(['message' => 'Registration successful']);
    }
}
