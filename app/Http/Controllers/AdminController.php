<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard(){
      
      $totalUser = User::count();
      $totalEvent = Event::count();
      return view('admin.dashboard',compact('totalEvent','totalUser'));  
    }
    public function showBooking(){
      return view('admin.booking_list');
    }
    public function deleteBooking($id){
      
    }
}
