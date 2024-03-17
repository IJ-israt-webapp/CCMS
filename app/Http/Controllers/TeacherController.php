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
}
