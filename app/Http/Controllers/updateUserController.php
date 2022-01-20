<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class updateUserController extends Controller
{
    public function edit(){
        $user = User::find(Auth::user()->id);
        return view('edituser',['user' => $user] );
    }

    public function update(Request $request)
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

        $user = User::find(Auth::user()->id);

        $user->name = $name;
        $user->gender = $gender;
        $user->email = $email;
        $user->password = $password;

        // $user->save();

    $user->update(request()->all());
        // Auth::setUser($user);
        // Log::error(Auth::user()->name);

        return Redirect::to('/home');

  }
}
