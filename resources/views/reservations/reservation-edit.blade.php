<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="testbox">
                <form class="reservation_form" method="POST" action="{{ route('reservation.update', $reservation) }}">
                    @csrf
                    @method('PUT')
                    <div class="banner">
                        <h1>Hotel Reservation Form</h1>
                    </div>
                    <br />
                    <fieldset>
                        <legend>Reservation Details</legend>
                        <div class="columns">
                            <div class="item">
                                <label for="first_name">First Name<span>*</span></label>
                                <input id="first_name" type="text" name="first_name"
                                    value="{{ $reservation->first_name }}" />
                                @error('first_name')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="last_name"> Last Name<span>*</span></label>
                                <input id="last_name" type="text" name="last_name"
                                    value="{{ $reservation->last_name }}" />
                                @error('last_name')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="address">Address<span>*</span></label>
                                <input id="address" type="text" name="address"
                                    value="{{ $reservation->address }}" />
                                @error('address')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="zip_code">Zip Code<span>*</span></label>
                                <input id="zip_code" type="text" name="zip_code"
                                    value="{{ $reservation->zip_code }}" />
                                @error('zip_code')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="city">City<span>*</span></label>
                                <input id="city" type="text" name="city" value="{{ $reservation->city }}" />
                                @error('city')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="state">State<span>*</span></label>
                                <input id="state" type="text" name="state"
                                    value="{{ $reservation->state }}" />
                                @error('state')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="email">Email Address<span>*</span></label>
                                <input id="email" type="text" name="email"
                                    value="{{ $reservation->email }}" />
                                @error('email')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="phone">Phone<span>*</span></label>
                                <input id="phone" type="tel" name="phone"
                                    value="{{ $reservation->phone }}" />
                                @error('phone')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                    </fieldset>
                    <br />
                    <fieldset>
                        <legend>Dates</legend>
                        <div class="columns">
                            <div class="item">
                                <label for="checkin_date">Check-in Date <span>*</span></label>
                                <input id="checkin_date" type="date" name="checkin_date"
                                    value="{{ $reservation->checkin_date }}" />
                                @error('checkin_date')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="item">
                                <label for="checkout_date">Check-out Date <span>*</span></label>
                                <input id="checkout_date" type="date" name="checkout_date"
                                    value="{{ $reservation->checkout_date }}" />
                                @error('checkout_date')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="item">
                                <p>Check-in Time </p>
                                <select name="checkin_time">
                                    @php
                                        $check_time = ['Morning', 'Afternoon', 'Evening'];
                                    @endphp
                                    @foreach ($check_time as $time)
                                        <option value="{{ $time }}"
                                            {{ $reservation->checkin_time == $time ? 'selected' : '' }}>
                                            {{ $time }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="item">
                                <p>Check-out Time </p>
                                <select name="checkout_time">
                                    @foreach ($check_time as $time)
                                        <option value="{{ $time }}"
                                            {{ $reservation->checkout_time == $time ? 'selected' : '' }}>
                                            {{ $time }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="item">
                                <p>How many adults are coming?</p>
                                <select name="numberof_adults">
                                    @for ($i = 0; $i <= 5; $i++)
                                        <option value="{{ $i }}"
                                            {{ $reservation->numberof_adults == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="item">
                                <p>How many children are coming?</p>
                                <select name="numberof_children">
                                    @for ($i = 0; $i <= 5; $i++)
                                        <option value="{{ $i }}"
                                            {{ $reservation->numberof_children == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="item" style=width:100%>
                                <label for="numberof_rooms">Number of rooms</label>
                                <input id="numberof_rooms" type="number" name="numberof_rooms"
                                    value="{{ $reservation->numberof_rooms }}" />
                                @error('numberof_rooms')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <p>Room 1 type</p>
                                @php
                                    $room_types = ['standard', 'deluxe', 'suite'];
                                @endphp
                                <select name="room_1_type">
                                    <option value="{{ $reservation->room_1_type }}" selected>{{ $reservation->room_1_type }}</option>
                                    @foreach ($room_types as $room)
                                        <option value="{{ $room }}"
                                            {{ $reservation->room_1_type == $room ? 'selected' : '' }}>
                                            {{ $room }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="item">
                                <p>Room 2 type</p>
                                <select name="room_2_type">
                                    <option value="{{ $reservation->room_2_type }}" selected>{{ $reservation->room_2_type }}</option>
                                    @foreach ($room_types as $room)
                                        <option value="{{ $room }}"
                                            {{ $reservation->room_2_type == $room ? 'selected' : '' }}>
                                            {{ $room }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item">
                            <label for="special_instructions">Special Instructions</label>
                            <textarea id="special_instructions" name="special_instructions" rows="3">{{ $reservation->special_instructions }}</textarea>
                            @error('special_instructions')
                                <div class="text-red-300">{{ $message }}</div>
                            @enderror
                        </div>
                    </fieldset>
                    <div class="btn-block">
                        <button class="submit_button" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
