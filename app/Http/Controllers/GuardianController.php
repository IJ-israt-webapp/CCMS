<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function create(){
        return view("guardian.create");
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'NID' => 'required|integer',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required|string|max:255',
            'parent_id' => 'required|integer',
            'parent_profession' => 'required',
            'blood_group' => 'required|string|max:255',
            
        ]);
        $data = $request->all();
        $data['status'] = 'active';

        Guardian::create($data);

        return redirect('')->with('success', 'Student created successfully!');
    }

}
