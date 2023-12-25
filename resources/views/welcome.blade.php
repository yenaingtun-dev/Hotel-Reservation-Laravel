<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if (session()->has('message'))
                <div
                    class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-green-200 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z">
                            </path>
                        </svg>
                        <span>{{ session('message') }}herer</span>
                    </div>
                </div>
            @endif
            <div class="testbox">
                <form method="POST" action="{{ route('reservation.store') }}">
                    @csrf
                    <div class="banner">
                        <h1>Hotel Reservation Form</h1>
                    </div>
                    <br />
                    <fieldset>
                        <legend>Reservation Details</legend>
                        <div class="columns">
                            <div class="item">
                                <label for="first_name">First Name<span>*</span></label>
                                <input id="first_name" type="text" name="first_name" required />
                            </div>
                            <div class="item">
                                <label for="last_name"> Last Name<span>*</span></label>
                                <input id="last_name" type="text" name="last_name" required />
                            </div>
                            <div class="item">
                                <label for="address">Address<span>*</span></label>
                                <input id="address" type="text" name="address" required />
                            </div>
                            <div class="item">
                                <label for="zip_code">Zip Code<span>*</span></label>
                                <input id="zip_code" type="text" name="zip_code" required />
                            </div>
                            <div class="item">
                                <label for="city">City<span>*</span></label>
                                <input id="city" type="text" name="city" required />
                            </div>
                            <div class="item">
                                <label for="state">State<span>*</span></label>
                                <input id="state" type="text" name="state" required />
                            </div>
                            <div class="item">
                                <label for="email">Email Address<span>*</span></label>
                                <input id="email" type="text" name="email" required />
                            </div>
                            <div class="item">
                                <label for="phone">Phone<span>*</span></label>
                                <input id="phone" type="tel" name="phone" required />
                            </div>
                    </fieldset>
                    <br />
                    <fieldset>
                        <legend>Dates</legend>
                        <div class="columns">
                            <div class="item">
                                <label for="checkin_date">Check-in Date <span>*</span></label>
                                <input id="checkin_date" type="date" name="checkin_date" required />
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="item">
                                <label for="checkout_date">Check-out Date <span>*</span></label>
                                <input id="checkout_date" type="date" name="checkout_date" required />
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="item">
                                <p>Check-in Time </p>
                                <select name="checkin_time" required>
                                    <option value="" disabled selected>Select time</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>Check-out Time </p>
                                <select name="checkout_time" required>
                                    <option value="" disabled selected>Select time</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>How many adults are coming?</p>
                                <select name="numberof_adults" required>
                                    <option value="0" disabled selected>Number of adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>How many children are coming?</p>
                                <select name="numberof_children" required>
                                    <option value="0" disabled selected>Number of children</option>
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
                                <input id="numberof_rooms" type="number" name="numberof_rooms" required />
                            </div>
                            <div class="item">
                                <p>Room 1 type</p>
                                <select name="room_1_type" required>
                                    <option value="0" selected></option>
                                    <option value="standard">Standard</option>
                                    <option value="deluxe">Deluxe</option>
                                    <option value="suite">Suite</option>
                                </select>
                            </div>
                            <div class="item">
                                <p>Room 2 type</p>
                                <select name="room_2_type" required>
                                    <option value="0" selected></option>
                                    <option value="standard">Standard</option>
                                    <option value="deluxe">Deluxe</option>
                                    <option value="suite">Suite</option>
                                </select>
                            </div>
                        </div>
                        <div class="item">
                            <label for="special_instructions">Special Instructions</label>
                            <textarea id="special_instructions" name="special_instructions" rows="3" required></textarea>
                        </div>
                    </fieldset>
                    <div class="btn-block">
                        <button class="submit_button" type="submit" href="/">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
