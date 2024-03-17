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

    public function teacherStore (Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'identity'=>'required',
            'number'=>'required',
            'mail'=>'required',
            'nid'=>'required', 
            'address'=>'required',
            'gender'=>'required',
        ]);
        // dd($request->all());
        Teacher::create([
            // database column name=>$request->input field name
            'name'=>$request->name,
            'identity'=>$request->identity,
            'number'=>$request->number,
            'mail'=>$request->mail,
            'nid'=>$request->nid,
            'address'=>$request->address,
            'gender'=>$request->gender,
            
            

        ]);
        return to_route('teacher.index')->with('msg','Data store Successfully');

    }

}
