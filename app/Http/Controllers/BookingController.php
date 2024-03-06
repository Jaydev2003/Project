<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Data;
use App\Models\maids;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $booking_data = Booking::all();

        return view('booking/booking_data', ['show_data' => $booking_data]);

    }

    public function bookingform()
    {
        $data= maids::all();

        return view('booking/bookingform',compact('data'));

    }

    public function book(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_address' => 'required',
            'client_landmark' => 'required',
            'booking_date' => 'required',
            'start_date_time' => 'required',
            'end_date_time' => 'required',
            'maid_id' => 'required | unique:bookings,maid_id',
            'booking_type' => 'required',
            'booking_rate' => 'required',
            'status' => 'required',
        ]);
        session()->flash('success', 'Data added successfully');
        Booking::create($request->all());

        return redirect()->route('booking.index');
    }

    public function deletebooking($id)
    {
        Booking::destroy($id);

        return redirect()->route('booking.index');
    }

    public function showbookingupdate($id)
    {
        $data = Booking::findOrFail($id);
        $maids = maids::all();

        return view('update/updatebooking', compact('data' ,'maids'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'client_name' => 'required',
            'client_address' => 'required',
            'client_landmark' => 'required',
            'booking_date' => 'required',
            'start_date_time' => 'required',
            'end_date_time' => 'required',
            'maid_id' => 'required',
            'booking_type' => 'required',
            'booking_rate' => 'required',
            'status' => 'required',
        ]);
        session()->flash('success', 'Data Updated successfully');
        $data = Booking::findOrFail($id);
        $data->update($request->all());




        return redirect()->route('booking.index',compact('data'));
    }
}
