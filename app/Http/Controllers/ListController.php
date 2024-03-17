<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list(){
        $allnewmember=Member::where('status','deactive')->get();
    return view('pages.pending.list',compact('allnewmember'));
}
public function create(){

return view('pages.pending.create');
}
}
