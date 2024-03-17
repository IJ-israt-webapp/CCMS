<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApproveController extends Controller
{
    public function approve($id) {
        $member=Member::find($id);
        $member->update(['status'=> 'active']);
        Session::flash('success','status approved successfully');
        return redirect()->back();
    }  
}

