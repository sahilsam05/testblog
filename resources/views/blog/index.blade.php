@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 relative">
        <h1 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-500 via-pink-500 to-yellow-500 animate-gradient">
            Blog Posts
        </h1>
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/path-to-your-gif.gif');"></div>
    </div>
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
            class="bg-gradient-to-r from-purple-600 to-pink-600 text-white text-sm font-bold py-4 px-8 rounded-full shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
            Create Post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="w-4/5 mx-auto py-10">
        <div class="bg-gradient-to-r from-pink-100 via-purple-100 to-indigo-100 rounded-lg shadow-lg p-8 sm:flex">
            <div class="sm:w-1/3 flex justify-center items-center mb-6 sm:mb-0">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="rounded-lg shadow-md max-h-60 object-cover">
            </div>
            <div class="sm:w-2/3 sm:pl-8 flex flex-col justify-center">
                <h2 class="text-gray-800 font-extrabold text-4xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500 text-sm">
                    By <span class="font-bold italic text-gray-700">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-lg text-gray-600 pt-6 pb-8 leading-7 font-light truncate-description" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                    {{ $post->description }}
                </p>

                <a href="/blog/{{ $post->slug }}" class="inline-block mt-4 bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-blue-600 hover:shadow-lg transition duration-300 transform hover:scale-105">
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
    </div>    
@endforeach

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

@endsection
