<?php

namespace App\Http\Controllers;
use App\Models\child;
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
            'name' => 'required|string|max:255',
            'id_card' => 'required|integer',
            'age' => 'required|integer',
            'gender' => 'required|string|in:male,female',
            'address' => 'required|string|max:255',
            'parent_id' => 'required|integer',
            'attendance_id' => 'required|integer',
            'blood_group' => 'required|string|max:255',
            
        ]);
        $data = $request->all();
        $data['status'] = 'active';

        $child=child::create($validatedData);

        return redirect('/dashboard')->with('success', 'Student created successfully!');
    }
}














