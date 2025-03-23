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

<div id="comments-section" class="w-11/12 lg:w-4/5 m-auto pt-10">
    <h2 class="text-2xl font-bold">Comments</h2>
    @foreach($post->comments as $comment)
        <div class="comment bg-white p-4 rounded-lg shadow-md mt-4">
            <strong>{{ $comment->user->name ?? 'Anonymous' }}</strong>
            <p>{{ $comment->content }}</p>
        </div>
    @endforeach
</div>

<div class="w-11/12 lg:w-4/5 m-auto pt-10">
    <h2 class="text-2xl font-bold">Leave a Comment</h2>
    <form id="comment-form" action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-6">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <textarea name="content" rows="4" class="w-full p-4 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Write your comment here..." required></textarea>
        <button type="submit" class="mt-4 px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
            Submit
        </button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#comment-form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    console.log('Server Response:', response); // Log the server response for debugging
                    if (response.success) {
                        // Append the new comment to the comments section
                        $('#comments-section').prepend(`
                            <div class="comment bg-white p-4 rounded-lg shadow-md mt-4">
                                <strong>${response.author}</strong>
                                <p>${response.content}</p>
                            </div>
                        `);

                        // Clear the form fields
                        $('#comment-form')[0].reset();
                    }
                },
                error: function (xhr) {
                    console.error('Error:', xhr.responseText); // Log the error response
                    let errorMessage = 'Failed to add comment. Please try again.';
                    if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                        errorMessage = Object.values(xhr.responseJSON.errors).flat().join('\n');
                    } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    alert(errorMessage);
                }
            });
        });
    });
</script>
@endsection