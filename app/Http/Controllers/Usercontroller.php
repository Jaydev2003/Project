<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash as FacadesHash;

use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function main()
    {
        return view('user/users');
    }

    public function display()
    {
       $user = User::all();

        return view('user/main',compact('user'));
    }

    public function login(Request $req)
{
    $credentials = $req->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Retrieve user by email
    $user = User::where('email', $credentials['email'])->first();

    if ($user && $user->password == $credentials['password']) {
        // Authentication passed
        Auth::login($user);
        return redirect()->route('display');
    } else {
        // Authentication failed
        return back()
            ->withInput()
            ->withErrors(['error' => 'Invalid email or password']);
    }
}




}
