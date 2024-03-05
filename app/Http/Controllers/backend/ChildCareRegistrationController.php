<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChildCareRegistrationController extends Controller
{
    
    function register()  { 
        return view('pages.auth.registration');
    }

    function registerpage(Request $request)  {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;

        
        

        $this->validate($request,[
            'name'=>'required',
            'password'=>'required|min:6',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);
        $data = $request->all();
        $data['status'] = 'active';
        $data['password'] = Hash::make($data['password']);
        Guardian::create($data);

        return redirect()->route('login')->with('message', 'Registration Successfull');

    }
}

