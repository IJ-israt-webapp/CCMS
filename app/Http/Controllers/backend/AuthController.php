<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Models\member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function Log()  {
       return view('pages.auth.login');
    }
    function loginpage(Request $request)  {
        $email = $request->email;
        $password = $request->password;
        $data = $request->only(['email', 'password']);
        $user = member::where('email', 'israt@gmail.com')->first();

    //    if(Hash::check($request->password, $user->password)){
    //         return "ok";
    //     } 

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:6'
        ]);

        if (Auth::guard('member')->attempt(['email' => $email, 'password' => $password])) { 
        
            return redirect()->route('dashboard')->with('message', 'Login Successfull');
        }
    }

    function logout() {
        // dd($request->all());
        Auth::logout();
        return redirect()->route('login');
    }
}

