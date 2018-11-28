<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function addCustomerDetails(Request $request)
    {
        $this->validate($request,[
            'nic'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'address'=>'required'
        ]);
            $customer = new Customer;
            $customer->nic=$request->input('nic');
            $customer->firstname=$request->input('firstname');
            $customer->lastname=$request->input('lastname');
            $customer->mobile=$request->input('mobile');
            $customer->email=$request->input('email');
            $customer->address=$request->input('address');

            $customer->save();

            return redirect("/customer")->with('success',' Customer has Registered Successfully');

    }
       

    public function viewCustomer()
    {
        $customers=Customer::all();
        return view('viewcustomer')->with('customers',$customers);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
