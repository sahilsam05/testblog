@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="hero bg-blue-500 text-white text-center py-20">
        <h1 class="text-5xl font-bold uppercase">About Us</h1>
        <p class="text-xl mt-4">Learn more about our mission and values</p>
    </div>

    <!-- Three Column Layout -->
    <div class="sm:grid grid-cols-3 gap-10 w-4/5 mx-auto py-15">
        <div class="text-center">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image" class="mx-auto">
            <h2 class="text-2xl font-bold mt-5">Our Mission</h2>
            <p class="text-gray-500 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
        </div>
        <div class="text-center">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image" class="mx-auto">
            <h2 class="text-2xl font-bold mt-5">Our Vision</h2>
            <p class="text-gray-500 mt-3">Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem.</p>
        </div>
        <div class="text-center">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image" class="mx-auto">
            <h2 class="text-2xl font-bold mt-5">Our Values</h2>
            <p class="text-gray-500 mt-3">Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper.</p>
        </div>
    </div>

    <!-- Two Column Layout -->
    <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-15">
        <div class="text-center">
            <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="mx-auto">
            <p class="text-gray-500 mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.</p>
        </div>
        <div class="text-center">
            <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="mx-auto">
            <p class="text-gray-500 mt-5">Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem.</p>
        </div>
    </div>
@endsection
