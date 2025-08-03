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

            <!-- Add New User Form Section -->
            <section class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
                <form class="space-y-4">
                    <!-- User Name Input -->
                    <div>
                        <label for="editUserName" class="block text-gray-700 font-semibold mb-1">User Name</label>
                        <input type="text" id="editUserName" name="UserName" value="John Doe" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Email Input -->
                    <div>
                        <label for="editUserEmail" class="block text-gray-700 font-semibold mb-1">Email</label>
                        <input type="email" id="editUserEmail" name="UserEmail" value="john.doe@example.com" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="editUserPassword" class="block text-gray-700 font-semibold mb-1">Password</label>
                        <input type="password" id="editUserPassword" name="UserPassword" placeholder="Leave blank to keep current password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Form Action Buttons -->
                    <div class="flex justify-end space-x-4 pt-4">
                        <button type="button" class="bg-gray-300 text-gray-800 font-semibold py-3 px-6 rounded-md shadow-lg hover:bg-gray-400 transition-colors duration-200">
                            Cancel
                        </button>
                        <button type="submit" class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-md shadow-lg hover:bg-blue-700 transition-colors duration-200">
                            Add User
                        </button>
                    </div>
                </form>
        </main>
    </div>
    @endsection