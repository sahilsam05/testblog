@extends('layouts.app')

@section('content')
<article class="bg-white rounded-lg shadow-md p-6">
    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-md mb-6">
    <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
    <p class="text-gray-600 text-sm mb-6">Published on {{ $post->created_at->format('F j, Y') }}</p>
    <div class="prose max-w-none">
        {!! $post->content !!}
    </div>
</article>

<h2>Comments</h2>
@foreach($post->comments as $comment)
    <div>
        <strong>{{ $comment->author }}</strong>
        <p>{{ $comment->content }}</p>
    </div>
@endforeach
@endsection
