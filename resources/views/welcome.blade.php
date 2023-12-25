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
                        <span>{{ session('message') }}</span>
                    </div>
                </div>
            @endif
            <div class="testbox">
                <form class="reservation_form" method="POST" action="{{ route('reservation.store') }}">
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
                                <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required />
                                @error('first_name')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="last_name"> Last Name<span>*</span></label>
                                <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required />
                                @error('last_name')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="address">Address<span>*</span></label>
                                <input id="address" type="text" name="address" value="{{ old('address') }}" required />
                                @error('address')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="zip_code">Zip Code<span>*</span></label>
                                <input id="zip_code" type="text" name="zip_code" value="{{ old('zip_code') }}" required />
                                @error('zip_code')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="city">City<span>*</span></label>
                                <input id="city" type="text" name="city" value="{{ old('city') }}" required />
                                @error('city')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="state">State<span>*</span></label>
                                <input id="state" type="text" name="state" value="{{ old('state') }}" required />
                                @error('state')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="email">Email Address<span>*</span></label>
                                <input id="email" type="text" name="email" value="{{ old('email') }}" required />
                                @error('email')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="phone">Phone<span>*</span></label>
                                <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" required />
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
                                <input id="checkin_date" type="date" name="checkin_date" value="{{ old('checkin_date') }}" required />
                                <i class="fas fa-calendar-alt"></i>
                                @error('checkin_date')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <label for="checkout_date">Check-out Date <span>*</span></label>
                                <input id="checkout_date" type="date" name="checkout_date" value="{{ old('checkout_date') }}" required />
                                <i class="fas fa-calendar-alt"></i>
                                @error('checkout_date')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <p>Check-in Time </p>
                                @php
                                    $check_time = ['Morning', 'Afternoon', 'Evening'];
                                @endphp
                                <select name="checkin_time" required>
                                    <option value="" disabled selected>Select time</option>
                                    @foreach ($check_time as $time)
                                        <option value="{{ $time }}"
                                            {{ old('checkin_time') == $time ? 'selected' : '' }}>
                                            {{ $time }}</option>
                                    @endforeach
                                </select>
                                @error('checkin_time')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <p>Check-out Time </p>
                                <select name="checkout_time" required>
                                    <option value="" disabled selected>Select time</option>
                                    @foreach ($check_time as $time)
                                        <option value="{{ $time }}"
                                            {{ old('checkout_time') == $time ? 'selected' : '' }}>
                                            {{ $time }}</option>
                                    @endforeach
                                </select>
                                @error('checkout_time')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <p>How many adults are coming?</p>
                                <select name="numberof_adults" required>
                                    <option disabled selected>Number of adults</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('numberof_adults') == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                                @error('numberof_adults')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <p>How many children are coming?</p>
                                <select name="numberof_children" required>
                                    <option disabled selected>Number of children</option>
                                    @for ($i = 0; $i <= 5; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('numberof_children') == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                                @error('numberof_children')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item" style=width:100%>
                                <label for="numberof_rooms">Number of rooms</label>
                                <input id="numberof_rooms" type="number" name="numberof_rooms" value="{{ old('numberof_rooms') }}" required />
                                @error('numberof_rooms')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <p>Room 1 type</p>
                                @php
                                    $room_types = ['standard', 'deluxe', 'suite'];
                                @endphp
                                <select name="room_1_type" required>
                                    <option value="0" selected></option>
                                    @foreach ($room_types as $room)
                                        <option value="{{ $room }}"
                                            {{ old('room_1_type') == $room ? 'selected' : '' }}>
                                            {{ $room }}</option>
                                    @endforeach
                                </select>
                                @error('room_1_type')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="item">
                                <p>Room 2 type</p>
                                <select name="room_2_type" required>
                                    <option value="0" selected></option>
                                    @foreach ($room_types as $room)
                                        <option value="{{ $room }}"
                                            {{ old('room_2_type') == $room ? 'selected' : '' }}>
                                            {{ $room }}</option>
                                    @endforeach
                                </select>
                                @error('room_2_type')
                                    <div class="text-red-300">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item">
                            <label for="special_instructions">Special Instructions</label>
                            <textarea id="special_instructions" name="special_instructions" rows="3" required>{{ old('special_instructions') }}</textarea>
                            @error('special_instructions')
                                <div class="text-red-300">{{ $message }}</div>
                            @enderror
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
