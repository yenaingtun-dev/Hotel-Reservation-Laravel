<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Hotel Reservation Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm bg-white divide-y-2 divide-gray-200">
                            <thead class="text-left">
                                <tr>
                                    <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Name</th>
                                    <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Phone</th>
                                    <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Number-of-Rooms</th>
                                    <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Check-In-Date</th>
                                    <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Check-In-Time</th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $reservation->first_name }} {{ $reservation->last_name }}
                                        </td>
                                        <td class="px-4 py-2 text-gray-900 whitespace-nowrap">{{ $reservation->phone }}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $reservation->numberof_rooms }}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $reservation->checkin_date }}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $reservation->checkin_time }}</td>
                                        <td class="px-4 py-2 whitespace-nowrap">
                                            <a href="#"
                                                class="inline-block px-4 py-2 text-xs font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                                                View
                                            </a>
                                        </td>
                                        <td class="px-4 py-2 whitespace-nowrap">
                                            <a href="#"
                                                class="inline-block px-4 py-2 text-xs font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="px-4 py-2 whitespace-nowrap">
                                            <a href="#"
                                                class="inline-block px-4 py-2 text-xs font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
