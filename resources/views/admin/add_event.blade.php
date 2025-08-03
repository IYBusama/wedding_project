@extends('layouts.dashboard')
@section('dashboard')
<body class="bg-gray-100 font-sans">

    <!-- Main application container with a responsive flex layout -->
    <div class="flex flex-col md:flex-row min-h-screen">

    @include('components.admin_sidebar')

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-auto">
            
            <!-- Dashboard Header -->
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
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

                        <!-- Add New Event Form Section -->
            <section class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Add New Event</h2>
                <form class="space-y-4" action="#" method="post">
                    <!-- Event Title Input -->
                    <div>
                        <label for="eventTitle" class="block text-gray-700 font-semibold mb-1">Event Title</label>
                        <input type="text" id="eventTitle" name="eventTitle" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Date Input -->
                    <div>
                        <label for="eventDate" class="block text-gray-700 font-semibold mb-1">Date</label>
                        <input type="date" id="eventDate" name="eventDate" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Category Input -->
                    <div>
                        <label for="eventCategory" class="block text-gray-700 font-semibold mb-1">Category</label>
                        <input type="text" id="eventCategory" name="eventCategory" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-md shadow-lg hover:bg-blue-700 transition-colors duration-200">
                            Add Event
                        </button>
                    </div>
                </form>
            </section>
        </main>
    </div>
    @endsection