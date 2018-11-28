<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmer;
class FarmerController extends Controller
{
    //
    public function addFarmersDetails(Request $request)
    {
        $this->validate($request,[
            'nic'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'mobile'=>'required',
            'address'=>'required'
        ]);

        $farmer=new Farmer;
        $farmer->nic=$request->input('nic');
        $farmer->firstname=$request->input('firstname');
        $farmer->lastname=$request->input('lastname');
        $farmer->mobile=$request->input('mobile');
        $farmer->address=$request->input('address');

        $farmer->save();

        return redirect("/farmer")->with('success','Registered Successfull!');
    }

    public function viewFarmer()
    {
        $farmers=Farmer::all();
        return view('viewfarmer')->with('farmers',$farmers);
    }
}
