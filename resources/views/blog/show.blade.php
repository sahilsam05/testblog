@extends('layouts.app')

@section('content')
<div class="w-11/12 lg:w-4/5 m-auto text-left">
    <div class="py-10">
        <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-800 leading-tight">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-11/12 lg:w-4/5 m-auto pt-10 pb-20 bg-gradient-to-r from-pink-100 via-purple-100 to-indigo-100 rounded-lg shadow-lg">
    <span class="text-gray-600 text-sm lg:text-base">
        By <span class="font-bold italic text-gray-900">{{ $post->user->name }}</span>, 
        Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-lg lg:text-xl text-gray-700 pt-6 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

<div class="w-11/12 lg:w-4/5 m-auto pt-10">
    <h2 class="text-2xl font-bold text-gray-800">Leave a Comment</h2>
    <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-6">
        @csrf
        <textarea name="comment" rows="4" class="w-full p-4 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Write your comment here..." required></textarea>
        <button type="submit" class="mt-4 px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
            Submit
        </button>
    </form>
</div>
@endsection