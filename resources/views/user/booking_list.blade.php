@extends('layouts.dashboard')
@section('dashboard')

<body class="bg-gray-100 font-sans">

    <!-- Main application container with a responsive flex layout -->
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.user_sidebar')

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-auto">

            <!-- Header for the Booking List -->
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Bookings</h1>
                <div class="flex items-center space-x-2 text-gray-600">
                    <!-- Simple SVG for a user icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span>User</span>
                    <span class="text-gray-500">(Admin)</span>
                </div>
            </header>

            <!-- Table Section -->
            <section class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">All Bookings</h2>
                    <a href="/user/book" class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-md shadow-lg hover:bg-blue-700 transition-colors duration-200">
                        Book new Event
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left table-auto">
                        <thead class="text-gray-600">
                            <tr>
                                <th class="py-3 px-4 font-semibold">ID</th>
                                <th class="py-3 px-4 font-semibold">Event</th>
                                <th class="py-3 px-4 font-semibold">User</th>
                                <th class="py-3 px-4 font-semibold">Booking Date</th>
                                <th class="py-3 px-4 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $booking)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="py-3 px-4">{{ $booking->id }}</td>
                                <td class="py-3 px-4">{{ $booking->eventSelect }}</td>
                                <td class="py-3 px-4">{{ $booking->userName }}</td>
                                <td class="py-3 px-4">{{ $booking->bookingDate }}</td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{route('User.showEdit',$booking->id)}}" class="text-blue-600 hover:underline">Edit</a> &nbsp;|

                                        <form action="{{route('User.delete',$booking->id)}}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

        </main>

    </div>
    @endsection