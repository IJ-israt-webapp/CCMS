<?php

namespace App\Http\Controllers;
use App\Models\Children;
use Illuminate\Http\Request;

class ChildController extends Controller
{
       
    public function create()
    {
        return view('child.create');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'Name' => 'required',
            'Id_card' => 'required|integer',
            'Age' => 'required|integer',
            'Gender' => 'required|string',
            'Address' => 'required|string|max:255',
            'Parent_id' => 'required|integer',
            'Blood_group' => 'required|string|max:255',
            
        ]);
        //dd($request->all());
        $data = $request->all();
        //$data['status'] = 'active';

        Children::create([
            'Name'=> $data['Name'],
            'Age'=> $data['Age'],
            'Parent_id'=> $data['Parent_id'],
            'Blood_group'=> $data['Blood_group'],
            'Gender'=> $data['Gender'],
            'Id_Card'=>$request->Id_card,
            'Address'=> $data['Address'],
            
            
        ]);

        return redirect('')->with('success', 'Student created successfully!');
    }
}














