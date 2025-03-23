@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-pink-500 to-purple-500 text-white text-center py-20">
        <h1 class="text-5xl font-bold uppercase">About Us</h1>
        <p class="text-xl mt-4">Discover the story behind our passion for fashion</p>
    </div>

    <!-- Two Column Layout -->
    <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-15">
        <div class="text-center">
            <!-- Removed the image -->
            <h2 class="text-3xl font-bold mt-5">Our Journey</h2>
            <p class="text-gray-600 mt-3 leading-relaxed">
                From humble beginnings to becoming a trusted name in fashion blogging, we’ve always been driven by our love for style and creativity. Join us as we continue to inspire and empower fashion enthusiasts worldwide.
            </p>
        </div>
        <div class="text-center">
            <!-- Removed the image -->
            <h2 class="text-3xl font-bold mt-5">Our Vision</h2>
            <p class="text-gray-600 mt-3 leading-relaxed">
                We aim to be the go-to platform for fashion lovers, offering insights, trends, and tips that help you express your unique style. Fashion is more than clothing—it’s a way of life.
            </p>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="bg-gray-100 py-20">
        <div class="w-4/5 mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Our Mission</h2>
            <p class="text-gray-600 mt-5 leading-relaxed">
                To inspire confidence and creativity through fashion. We believe in celebrating individuality and empowering our readers to embrace their personal style.
            </p>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-gradient-to-r from-purple-500 to-pink-500 text-white text-center py-20">
        <h2 class="text-4xl font-bold">Join Our Community</h2>
        <p class="text-xl mt-4">Stay updated with the latest trends and tips in fashion</p>
        <a href="/blog" class="mt-6 inline-block bg-white text-purple-500 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 transition duration-300">
            Explore Our Blog
        </a>
    </div>
@endsection
