<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard(){
      return view('admin.dashboard');  
    }
    public function showBooking(){

    }
    public function deleteBooking(Request $request,$id){
      
    }
}
