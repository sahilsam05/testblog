@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-300 relative">
        <h1 class="text-6xl font-extrabold text-gray-800 animate-pulse relative z-10">
            Blog Posts
        </h1>
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/path-to-your-gif.gif');"></div>
        <div class="absolute inset-0 flex justify-center items-center">
            <div class="w-full h-full rounded-full animate-gradient bg-gradient-to-r from-red-500 via-yellow-500 to-blue-500 opacity-50 blur-lg"></div>
        </div>
    </div>
    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }
    </style>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-600 rounded-2xl py-4 shadow-lg">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-gradient-to-r from-purple-500 to-pink-500 text-white text-xs font-bold py-3 px-5 rounded-full shadow-md hover:shadow-lg transition duration-300">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-10 border-b border-gray-300">
        <div class="flex justify-center">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="" class="rounded-lg shadow-lg max-h-60 object-cover">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-gray-800 font-extrabold text-4xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500 text-sm">
                By <span class="font-bold italic text-gray-700">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-lg text-gray-600 pt-6 pb-8 leading-7 font-light truncate-description" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="text-blue-500 hover:text-blue-700 transition duration-300">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <div class="flex justify-end space-x-4 mt-4">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-600 italic hover:text-gray-800 border-b-2 border-transparent hover:border-gray-800 transition duration-300">
                        Edit
                    </a>

                    <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 hover:text-red-700 transition duration-300"
                            type="submit">
                            Delete
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>    
@endforeach

<script>
    // Removed toggle functionality for comment section
</script>

@endsection
