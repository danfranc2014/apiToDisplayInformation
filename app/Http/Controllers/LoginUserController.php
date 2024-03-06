<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LoginUserController extends Controller
{

    public function login(Request $request)
    {

        $user = User::whereEmail($request->email)->first();

        if (!$user ||  !Hash::check($request->password, $user->password)) {
            return response()->json(data: [
                'message' => 'no existe un usuario con las credenciales enviadas'
            ]);
        }

        $user->api_token = Str::random(150);
        $user->save();

        return response()->json(data: [
            'message' => 'Usuario logeado',
            'token' => $user->api_token
        ]);
    }
}
