<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    //**mostrar la vista del registro */
    public function show(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = User::created($request->validated());

    }
}
