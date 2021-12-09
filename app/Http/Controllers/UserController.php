<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    public function register(Request $request){

        $user = new User;

        $user->email = $request->get('email');
        $user->UUID = $request->get('UUID');
        $user->password = bcrypt($request->get('password'));
        $user->confirm_password = $user->password;

        $user->save();

    }


    public function login(Request $request): Response{

        $credential = ['email' => $request->get('email'), 'password' => $request->get('password')];
        $email = $request->get('email');
        $password = $request->get('password');
    
        if (Auth::attempt(['email' => $email, 'password' => $password ])){
            return response(Auth::user(), 200);

        };
        abort(401);
    }
}
