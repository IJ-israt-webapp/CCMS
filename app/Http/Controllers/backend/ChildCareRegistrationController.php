<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Models\member;
use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $data['status'] = 'deactive';
        $data['password'] = Hash::make($data['password']);
        member::create($data);

        Session::flash('success', 'Registration successful!');

        return redirect()->route('login');

    }
}

