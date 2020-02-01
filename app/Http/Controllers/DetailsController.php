<?php

namespace App\Http\Controllers;

use App\Details;
use App\Social;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    //
    public function index(){
        $details = Details::first();
        return view('admin.detalis')->with([
            'details' => $details
        ]);
    }
    public  function addDetails(Request $request){
        $details = new Details();
        $details->name = $request->data['fullName'];
        $details->post =$request->data['Designation'];
        $details->description =$request->data['aboutMe'];
        $details->firstname =$request->data['firstName'];
        $details->lastname =$request->data['lastName'];
        $details->dob = $request->data['dob'];
        $details->nationality =$request->data['Nationality'];
        $details->experience =$request->data['Experience'];
        $details->address =$request->data['Address'];
        $details->status =$request->data['status'];
        $details->language =$request->data['Language'];
        $details->phone =$request->data['Phone'];
        $details->save();
        return "save";
    }

}
