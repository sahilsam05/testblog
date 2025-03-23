@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-purple-500 to-yellow-500 text-white text-center py-20">
    <h1 class="text-5xl font-bold uppercase">Contact Us</h1>
    <p class="text-xl mt-4">We'd love to hear from you! Reach out to us with any questions or feedback.</p>
</div>

<!-- Contact Details Section -->
<div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-15">
    <div class="text-center">
        <h2 class="text-3xl font-bold mt-5 text-purple-600">Get in Touch</h2>
        <p class="text-gray-700 mt-3 leading-relaxed">
            Email: contact@fashionblog.com<br>
            Phone: +1 (123) 456-7890<br>
            Address: 123 Fashion Street, Style City, USA
        </p>
    </div>
    <div class="text-center">
        <h2 class="text-3xl font-bold mt-5 text-purple-600">Follow Us</h2>
        <p class="text-gray-700 mt-3 leading-relaxed">
            Stay connected with us on social media:<br>
            Instagram: @fashionblog<br>
            Twitter: @fashion_blog<br>
            Facebook: Fashion Blog
        </p>
    </div>
</div>

<!-- Contact Form Section -->
<div class="bg-gray-50 py-20">
    <div class="w-4/5 mx-auto">
        <h2 class="text-4xl font-bold text-purple-700 text-center">Send Us a Message</h2>
        @if (session('success'))
            <div class="w-4/5 mx-auto mt-6 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <form action="/contact" method="POST" class="mt-10">
            @csrf
            <div class="mb-6">
                <input type="text" name="name" placeholder="Your Name" class="w-full p-4 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div class="mb-6">
                <input type="email" name="email" placeholder="Your Email" class="w-full p-4 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div class="mb-6">
                <textarea name="message" rows="5" placeholder="Your Message" class="w-full p-4 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="px-6 py-3 bg-purple-500 text-white font-bold rounded-lg shadow-lg hover:bg-purple-600 transition duration-300">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
