<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function insertContact(){
        $storeName=$_GET['storeName'];

        $email=$_GET['email'];

        $phoneNumber=$_GET['phone_no'];

        $subject=$_GET['subject'];
        $message=$_GET['message'];

        $contacts=new Contact();
        $contacts->site_id=1;
        $contacts->customer_id=1;
        $contacts->store_name=$storeName;
        $contacts->email=$email;
        $contacts->phone_no=$phoneNumber;
        $contacts->subject=$subject;
        $contacts->message=$message;


        $contacts->save();
        echo 'insert data';
    }
    public function showAllHelpRequest(){
        $allcontacts=Contact::all();
        return view( 'showAllContacts')->with ('contacts',$allcontacts);
    }
}
