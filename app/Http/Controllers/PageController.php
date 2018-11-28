<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getFarmerPage()
    {
        return view('farmer');
    }

    public function getFarmerRegisterPage()
    {
        return view('register');
    }

    public function getCustomerPage(){
        return view('customer');
    }
    public function getCustomerRegisterPage(){
        return view('customerRegister');

    }
    public function getIndexPage(){
        return view('index');
    }
    public function getDefaultAdminPage(){
        return view('adminLogin');
    }
}
