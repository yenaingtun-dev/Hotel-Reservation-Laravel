<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="testbox">
                <form class="reservation_form">
                    <div class="banner">
                        <h1>Hotel Reservation Form</h1>
                    </div>
                    <br />
                    <fieldset>
                        <legend>Reservation Details</legend>
                        <div class="columns">
                            <div class="item">
                                <label for="first_name">First Name<span>*</span></label>
                                <input id="first_name" type="text" name="first_name" value="{{ $reservation->first_name }}" disabled />
                            </div>
                            <div class="item">
                                <label for="last_name"> Last Name<span>*</span></label>
                                <input id="last_name" type="text" name="last_name" value="{{ $reservation->last_name }}" disabled/>
                            </div>
                            <div class="item">
                                <label for="address">Address<span>*</span></label>
                                <input id="address" type="text" name="address" value="{{ $reservation->address }}" disabled/>
                            </div>
                            <div class="item">
                                <label for="zip_code">Zip Code<span>*</span></label>
                                <input id="zip_code" type="text" name="zip_code" value="{{ $reservation->zip_code }}" disabled/>
                            </div>
                            <div class="item">
                                <label for="city">City<span>*</span></label>
                                <input id="city" type="text" name="city" value="{{ $reservation->city }}" disabled/>
                            </div>
                            <div class="item">
                                <label for="state">State<span>*</span></label>
                                <input id="state" type="text" name="state" value="{{ $reservation->state }}" disabled/>
                            </div>
                            <div class="item">
                                <label for="email">Email Address<span>*</span></label>
                                <input id="email" type="text" name="email" value="{{ $reservation->email }}" disabled/>
                            </div>
                            <div class="item">
                                <label for="phone">Phone<span>*</span></label>
                                <input id="phone" type="tel" name="phone" value="{{ $reservation->phone }}" disabled/>
                            </div>
                    </fieldset>
                    <br />
                    <fieldset>
                        <legend>Dates</legend>
                        <div class="columns">
                            <div class="item">
                                <label for="checkin_date">Check-in Date <span>*</span></label>
                                <input id="checkin_date" type="date" name="checkin_date" value="{{ $reservation->checkin_date }}" disabled/>
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="item">
                                <label for="checkout_date">Check-out Date <span>*</span></label>
                                <input id="checkout_date" type="date" name="checkout_date" value="{{ $reservation->checkout_date }}" disabled/>
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="item">
                                <p>Check-in Time </p>
                                <select name="checkin_time" disabled>
                                    @if ($reservation->checkin_time)
                                        <option value="{{ $reservation->checkin_time }}" selected>{{ $reservation->checkin_time }}</option>
                                    @else
                                        <option value="" disabled selected>Select time</option>
                                    @endif
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>Check-out Time </p>
                                <select name="checkout_time" disabled>
                                    @if ($reservation->checkout_time)
                                        <option value="{{ $reservation->checkout_time }}" selected>{{ $reservation->checkout_time }}</option>
                                    @else
                                        <option value="0" selected>Select Time</option>
                                    @endif
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>How many adults are coming?</p>
                                <select name="numberof_adults" disabled>
                                    @if ($reservation->numberof_adults)
                                        <option value="{{ $reservation->numberof_adults }}" selected>{{ $reservation->numberof_adults }}</option>
                                    @else
                                        <option value="0" selected>Number of adults</option>
                                    @endif
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>How many children are coming?</p>
                                <select name="numberof_children" disabled>
                                    @if ($reservation->numberof_children)
                                        <option value="{{ $reservation->numberof_children }}" selected>{{ $reservation->numberof_children }}</option>
                                    @else
                                        <option value="0" selected>Number of children</option>
                                    @endif
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="item" style=width:100%>
                                <label for="numberof_rooms">Number of rooms</label>
                                <input id="numberof_rooms" type="number" name="numberof_rooms"  value="{{ $reservation->numberof_rooms }}" disabled/>
                            </div>
                            <div class="item">
                                <p>Room 1 type</p>
                                <select name="room_1_type" disabled>
                                    @if ($reservation->room_1_type)
                                        <option value="{{ $reservation->room_1_type }}" selected>{{ $reservation->room_1_type }}</option>
                                    @else
                                        <option value="0" selected></option>
                                    @endif
                                    <option value="standard">Standard</option>
                                    <option value="deluxe">Deluxe</option>
                                    <option value="suite">Suite</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>Room 2 type</p>
                                <select name="room_2_type" disabled>
                                    @if ($reservation->room_2_type)
                                        <option value="{{ $reservation->room_2_type }}" selected>{{ $reservation->room_2_type }}</option>
                                    @else
                                        <option value="0" selected></option>
                                    @endif
                                    <option value="standard">Standard</option>
                                    <option value="deluxe">Deluxe</option>
                                    <option value="suite">Suite</option>
                                </select>
                            </div>
                        </div>
                        <div class="item">
                            <label for="special_instructions">Special Instructions</label>
                            <textarea id="special_instructions" name="special_instructions" rows="3" disabled>{{  $reservation->special_instructions }}</textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
