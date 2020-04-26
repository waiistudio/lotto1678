<?php

namespace App\Http\Controllers;
use App\user_data;
use App\levels;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MemberController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addMem(){
        $header = 'เพิ่มสมาชิก';
        $user_data = user_data::all();
        $levels = levels::all();
        return view('members/addmem', compact('header','user_data',('levels')));
    }

    public function showMember (){
        $header ='ข้อมูลสมาชิก';
        $user_data = user_data::all();
        return view('members/member', compact('header','user_data'));
    }


    public function test(){
        $header = 'test';
        $user_data = user_data::all();
        return view('test', compact('user_data','header'));
    }

    public function saveMem(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'pass' => 'numeric',

        ]);

        $products = new user_data();
        $products->name = $request->input('name');
        $products->email = $request->input('email');
        $products->password = Hash::make($request->input('pass'));
        $products->status = $request->input('status');
        $products->save();

        return redirect('/member') ;
    }

}
