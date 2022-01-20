<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class registerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8'
        ]);

        $name = $request['name'];
        $gender = $request['gender'];
        $email = $request->input('email');
        $password = $request['password'];

        $user = new User();
        $user->name = $name;
        $user->gender = $gender;
        $user->email = $email;
        $user->password = $password;

        $user-> save();
        Auth::login($user);
        return Redirect::to('/home');

  }

}
