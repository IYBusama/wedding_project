<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function showAddEvent()
    {
        return view('admin.add_event');
    }
    public function addEvent(Request $request) {
        $request->validate([
            'eventDate' => 'required',
            'eventCategory' => 'required',
        ]);
    }
    public function showEditEvent()
    {
        return view('admin.edit_event');
    }
    public function editEvent(Request $request){

    }
    public function eventDelete(Request $request,$id){
        
    }
}
