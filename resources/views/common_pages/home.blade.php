@extends('layouts.main')
@section('content')
<style>
    section.hero-section {
        background: #f8f9fc;
        padding: 80px 20px;
    }

    .hero-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 40px;
    }

    @media (min-width: 768px) {
        .hero-container {
            flex-direction: row;
            justify-content: space-between;
        }
    }

    .hero-text {
        max-width: 600px;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2d3748;
        line-height: 1.2;
    }

    .hero-title span {
        color: #4f46e5;
        /* Indigo */
    }

    .hero-description {
        font-size: 1.125rem;
        color: #4a5568;
        margin: 20px 0;
    }

    .hero-buttons a {
        display: inline-block;
        padding: 12px 24px;
        border-radius: 999px;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
        margin-right: 15px;
    }

    .hero-buttons a.primary {
        background-color: #4f46e5;
        color: white;
    }

    .hero-buttons a.primary:hover {
        background-color: #4338ca;
    }

    .hero-buttons a.secondary {
        border: 2px solid #4f46e5;
        color: #4f46e5;
        background-color: white;
    }

    .hero-buttons a.secondary:hover {
        background-color: #f3f4f6;
    }

    .hero-image img {
        max-width: 100%;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

</style>

@include('components.navbar')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Manage Your Special Events</h1>
        <p>Weddings & Workshops - We handle it all with care and professionalism</p>

    </div>
</section>
<section class="relative">
    <div class="container mx-auto px-6 py-20">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 flex flex-col mb-10 md:mb-0 items-start">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4 text-gray-800">
                    Create Memories,<br>
                    <span class="text-indigo-600">Book with Ease</span>
                </h1>
                <p class="text-lg md:text-xl mb-8 text-gray-600">
                    Your one-stop platform for wedding reservations and creative workshops. Plan, book, and celebrate life's special moments.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#weddings" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-full transition duration-300">
                        Book a Wedding
                    </a>
                    <a href="#workshops" class="bg-white hover:bg-gray-100 text-indigo-600 font-bold py-3 px-6 border-2 border-indigo-600 rounded-full transition duration-300">
                        Explore Workshops
                    </a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1471014f-ffb6-4bc5-9819-c2080db399b9.png" alt="Happy couple getting married in a beautiful outdoor venue with floral decorations" class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.tailwindcss.com"></script>


@include('components.footer')

@endsection