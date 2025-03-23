@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-4xl font-bold text-center text-purple-700 mb-8">Upcoming Drops</h1>
    <p class="text-center text-gray-600 mb-12">Stay tuned for the latest upcoming drops! Discover exclusive fashion items from top brands.</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Item 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="overflow-hidden rounded-md mb-4">
                <img src="{{ asset('images/classic-leather-jacket.jpg') }}" alt="Classic Leather Jacket" class="w-full h-48 object-cover transform transition-transform duration-300 hover:scale-95">
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Classic Leather Jacket</h2>
            <p class="text-gray-600 mt-2">Brand: <span class="font-semibold">Urban Edge</span></p>
            <p class="text-gray-600 mt-4">A timeless leather jacket that combines style and durability. Perfect for any season.</p>
        </div>
        
        <!-- Item 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="overflow-hidden rounded-md mb-4">
                <img src="{{ asset('images/vintage-denim-jeans.jpg') }}" alt="Vintage Denim Jeans" class="w-full h-48 object-cover transform transition-transform duration-300 hover:scale-95">
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Vintage Denim Jeans</h2>
            <p class="text-gray-600 mt-2">Brand: <span class="font-semibold">Retro Vibes</span></p>
            <p class="text-gray-600 mt-4">High-quality denim jeans with a vintage wash. A must-have for casual outings.</p>
        </div>
        
        <!-- Item 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="overflow-hidden rounded-md mb-4">
                <img src="{{ asset('images/silk-scarf-collection.jpg') }}" alt="Silk Scarf Collection" class="w-full h-48 object-cover transform transition-transform duration-300 hover:scale-95">
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Silk Scarf Collection</h2>
            <p class="text-gray-600 mt-2">Brand: <span class="font-semibold">Elegance Co.</span></p>
            <p class="text-gray-600 mt-4">Luxurious silk scarves in vibrant colors and patterns. Elevate your outfit effortlessly.</p>
        </div>
        
        <!-- Add more items as needed -->
    </div>
</div>
@endsection
