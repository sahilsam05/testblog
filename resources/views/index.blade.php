@extends('layouts.app')

@section('content')
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/fashion-show.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl sm:text-7xl font-bold uppercase tracking-wide">
                    Fashion Blog 2025
                </h1>
                <p class="mt-6 text-lg sm:text-xl">
                    Discover the latest trends and insights in the world of fashion.
                </p>
                <a href="/blog" class="mt-8 inline-block bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">
                    Explore Our Blog
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center text-center w-4/5 mx-auto py-20">
        <h2 class="text-3xl font-bold text-gray-800">
            Stay Ahead in Fashion
        </h2>
        <p class="mt-4 text-gray-600">
            Join us as we explore the latest trends, tips, and insights in the fashion world. Stay inspired and express your unique style.
        </p>
        <a href="/about" class="mt-6 inline-block bg-purple-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-purple-600 transition duration-300">
            Learn More About Us
        </a>
    </div>
@endsection