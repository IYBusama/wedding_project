<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showDashboard()
    {
        return view('user.dashboard');
    }
    public function showBookingList()
    {
        $booking = Booking::all();
        return view('user.booking_list', compact('booking'));
    }
    public function showBooking()
    {
        return view('user.book_event');
    }
    public function booking(Request $request)
    {
        $request->validate([
            'eventSelect' => 'required|in:music-festival,tech-conference,art-exhibition',
            'userName' => 'required',
            'userEmail' => 'required',
            'bookingDate' => 'required',
        ]);

        Booking::create([
            'eventSelect' => $request->eventSelect,
            'userName' => $request->userName,
            'userEmail' => $request->userEmail,
            'bookingDate' => $request->bookingDate,
        ]);

        return redirect()->route('User.showBookingList');
    }
    public function showEdit($id)
    {
        $booking = Booking::find($id);
        return view('user.edit_event', compact('booking'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'eventSelect' => 'required',
            'userName' => 'required',
            'userEmail' => 'required',
            'bookingDate' => 'required',
        ]);

        $booking = Booking::find($id);
        $booking->update($request->all());

        return redirect()->route('User.showEdit',$id);
    }
    public function delete($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('User.showBookingList');
    }
}
