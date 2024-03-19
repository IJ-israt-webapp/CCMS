<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherIndex(){
        $teacher = Teacher::all();
        return view("pages.backend.teacher.index", compact('teacher'));
    }

    public function teacherFrom (){
        // $teacher = Teacher::all();
        // dd('hiii');
        return view('pages.backend.teacher.create');
    }

    public function edit($id){
        $teacheritem = Teacher::findOrFail($id);
        return view('pages.backend.teacher.edit' ,compact('teacheritem'));
    }
    public function update(Request $request, $id){
        $teacher = Teacher::findOrFail($id);
        $teacher->update ($request->all());
        return redirect()->route('teacher.index',compact('teacher'))->with('success','update');
    }
    public function delete(Request $request, $id){
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teacher.index',compact('teacher'))->with('success','delete');
    }


    public function teacherStore (Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'identity'=>'required',
            'number'=>'required',
            'nid'=>'required', 
            'address'=>'required',
            'mail'=>'required',
            'password'=> 'required',
            'gender'=>'required',
        ]);
        // dd($request->all());
        Teacher::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'identity'=>$request->identity,
            'number'=>$request->number,
            
            'nid'=>$request->nid,
            'address'=>$request->address,
            'mail'=>$request->mail,
            'password'=>$request->password,
            'gender'=>$request->gender,
            
            
 
        ]);
        return redirect()->route('teacher.index')->with('msg','Data store Successfully');

    }

}
