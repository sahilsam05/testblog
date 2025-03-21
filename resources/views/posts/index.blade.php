@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold mb-8">Latest Posts</h1>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($posts as $post)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-bold mb-2">{{ $post->title }}</h2>
            <p class="text-gray-600 text-sm mb-4">{{ $post->excerpt }}</p>
            <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:underline">Read More</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
