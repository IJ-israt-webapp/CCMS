<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Models\Member;
use App\Models\Guardian;
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
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:6'
        ]);

        $email = $request->email;
        $password = $request->password;

        if ($request->type == 'admin') {
            $user = User::where('email', $request->email)->first();
            if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) { 
                return redirect()->route('dashboard')->with('message', 'Login Successfull');
            }
        }
        
        $data = $request->only(['email', 'password']);
        $user = Member::where('email', $request->email)->first();
        if ($user->status == 'deactive') {
            return redirect()->back()->with(['error' => 'User not active, contact with administrator']);
        }

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

