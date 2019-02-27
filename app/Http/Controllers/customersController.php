<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class customersController extends Controller
{
    public function insertCustomer(){
        $firstName=$_GET['firstName'];
        $lastName=$_GET['lastName'];
        $email=$_GET['email'];
        $password=$_GET['password'];
        $phoneNumber=$_GET['phoneNumber'];

        $address=$_GET['address'];
        $apt=$_GET['apt'];
        $city=$_GET['city'];


        $postalCode=$_GET['postalCode'];
        $country=$_GET['country'];




        $customer=new Customer();
        $customer->site_id=1;
        $customer->first_name=$firstName;
        $customer->last_name=$lastName;
        $customer->email=$email;
        $customer->password=$password;
        $customer->phone_no=$phoneNumber;
        $customer->address=$address;
        $customer->apt=$apt;
        $customer->city=$city;
        $customer->postal_code=$postalCode;
        $customer->country=$country;

        $customer->save();
        echo 'insert data';
    }

    public function showCutomers(){
        $allCustomers=Customer::all();
        return view( 'showAllCustomers')->with ('customers',$allCustomers);
    }
}
