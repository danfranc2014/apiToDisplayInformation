<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StoreUserController extends Controller{

    public function store(Request $request){

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password) 
            
        ]);

        return response()->json(data:[
            'message'=>'Usuario Registrado exitosamente'
        ]);

    }
}