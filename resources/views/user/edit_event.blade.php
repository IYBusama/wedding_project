<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Event - EventSys</title>
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom font for a clean, modern look */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Main application container with a responsive flex layout -->
    <div class="flex flex-col md:flex-row min-h-screen">

        @include('components.user_sidebar')

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-auto">

            <!-- Header for the Booking Page -->
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Book an Event</h1>
                <div class="flex items-center space-x-2 text-gray-600">
                    <!-- Simple SVG for a user icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span>User</span>
                    <span class="text-gray-500">(user)</span>
                </div>
            </header>

            <!-- Event Booking Form Section -->
            <section class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Book a New Event</h2>
                <form class="space-y-4" action="{{route('User.update',$booking->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <!-- Event Selection Dropdown -->
                    <div>
                        <label for="eventSelect" class="block text-gray-700 font-semibold mb-1">Select Event</label>
                        <select id="eventSelect" name="eventSelect" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">-- Select an event --</option>
                            <option value="music-festival">Music Festival 2023</option>
                            <option value="tech-conference">Tech Conference</option>
                            <option value="art-exhibition">Art Exhibition</option>
                        </select>
                    </div>

                    <!-- User Name Input -->
                    <div>
                        <label for="userName" class="block text-gray-700 font-semibold mb-1">Your Name</label>
                        <input type="text" id="userName" name="userName" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{old('userName',$booking->userName)}}">
                    </div>

                    <!-- User Email Input -->
                    <div>
                        <label for="userEmail" class="block text-gray-700 font-semibold mb-1">Your Email</label>
                        <input type="email" id="userEmail" name="userEmail" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{old('userEmail',$booking->userEmail)}}">
                    </div>

                    <!-- Booking Date Input -->
                    <div>
                        <label for="bookingDate" class="block text-gray-700 font-semibold mb-1">Booking Date</label>
                        <input type="date" id="bookingDate" name="bookingDate" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end pt-4">
                        <button type="submit" class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-md shadow-lg hover:bg-blue-700 transition-colors duration-200">
                            Update Booking
                        </button>
                    </div>
                    <p><a href="/user/book-list">← Back to Home</a></p>
                </form>
            </section>
        </main>

    </div>

</body>

</html>