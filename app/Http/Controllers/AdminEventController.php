<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function showeventList()
    {

        $events = Event::all();
        return view('admin.event_list', compact('events'));
    }
    public function showAddEvent()
    {
        return view('admin.add_event');
    }
    public function addEvent(Request $request)
    {
        $request->validate([
            'eventTitle' => 'required',
            'eventDate' => 'required',
            'eventCategory' => 'required',
        ]);

        Event::create([
            'eventTitle' => $request->eventTitle,
            'eventDate' => $request->eventDate,
            'eventCategory' => $request->eventCategory,
        ]);

        return redirect()->route('AdminEvent.showAddEvent');
    }
    public function showEditEvent($id)
    {   
        $event = Event::findOrFail($id);
        return view('admin.edit_event',compact('event'));
    }
    public function editEvent(Request $request, $id)
    {
        $request->validate([
            'eventTitle' => 'required',
            'eventDate' => 'required',
            'eventCategory' => 'required',
        ]);

        $event = Event::find($id);
        $event->update($request->all());

        return redirect()->route('AdminEvent.showEditEvent', $id);
    }
    public function eventDelete($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('AdminEvent.showeventList');
    }
}
