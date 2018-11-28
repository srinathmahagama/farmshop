<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Admin;
class AdminController extends Controller
{
    public function logAdmin(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ]);

        $u_name=$request->input('username');
        $p_word=$request->input('password');

        if($u_name=="Admin" && $p_word=="123"){
            return redirect("index");
        }
        else{
            return redirect("adminLogin")->with('success','Username or Password entered is Wrong');
        }
    }
    //
}
