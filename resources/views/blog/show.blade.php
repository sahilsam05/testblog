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
@endsection