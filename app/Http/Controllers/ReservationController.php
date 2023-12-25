<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::paginate(10)->withQueryString();
        return view('dashboard', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'state' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'checkin_time' => 'required',
            'checkout_time' => 'required',
            'numberof_adults' => 'required',
            'numberof_children' => 'required',
            'numberof_rooms' => 'required',
            'room_1_type' => 'required',
            'room_2_type' => 'required',
            'special_instructions' => 'required',
        ]);

        if ($validatedData) {
            $reservation = new Reservation;

            $reservation->first_name = $request->first_name;
            $reservation->last_name = $request->last_name;
            $reservation->address = $request->address;
            $reservation->zip_code = $request->zip_code;
            $reservation->city = $request->city;
            $reservation->state = $request->state;
            $reservation->email = $request->email;
            $reservation->phone = $request->phone;
            $reservation->checkin_date = $request->checkin_date;
            $reservation->checkout_date = $request->checkout_date;
            $reservation->checkin_time = $request->checkin_time;
            $reservation->checkout_time = $request->checkout_time;
            $reservation->numberof_adults = $request->numberof_adults;
            $reservation->numberof_children = $request->numberof_children;
            $reservation->numberof_rooms = $request->numberof_rooms;
            $reservation->room_1_type = $request->room_1_type;
            $reservation->room_2_type = $request->room_2_type;
            $reservation->special_instructions = $request->special_instructions;
            $reservation->save();
            return redirect()->route('welcome')->with('message', 'reservation successfully booked!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
