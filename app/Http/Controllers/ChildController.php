<?php

namespace App\Http\Controllers;
use App\Models\Children;
use App\Models\Guardian;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function childIndex(){
        $children = Children::all();
        return view("child.index" ,compact("children"));

    }
       
    public function create()
    {   
        $data['guardians'] = Guardian::all();
        return view('child.create', $data);
    }
    public function edit($id){
        $childitem = Children::findOrFail($id);
        return view('child.edit' ,compact('childitem'));
    }
    public function update(Request $request, $id){
        $child = Children::findOrFail($id);
        $child->update ($request->all());
        return redirect()->route('child.index',compact('child'))->with('success','update');
    }

    public function delete(Request $request, $id){
        $child = Children::findOrFail($id);
        $child->delete();
        return redirect()->route('child.index',compact('child'))->with('success','delete');
    }




    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'id_card' => 'required',
            'age' => 'required',
            'address' => 'required',
            'parent_id' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
            
        ]);
        //dd($request->all());
        $data = $request->all();
        //$data['status'] = 'active';

        Children::create([
            'name'=> $data['name'],
            'id_card'=>$request->id_card,
            'age'=> $data['age'],
            'address'=> $data['address'],
            'parent_id'=> $data['parent_id'],
            'gender'=> $data['gender'],
            'blood_group'=> $data['blood_group'],
            
        ]);

        return redirect()->route('child.index')->with('success', 'Student created successfully!');
    }
}














