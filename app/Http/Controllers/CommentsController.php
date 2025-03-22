<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    // ...existing code...

    public function store(Request $request, $postId)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:500',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->content = $request->content;
        $comment->author = auth()->user()->name; // Assuming the user is authenticated
        $comment->save();

        return response()->json([
            'success' => true,
            'author' => $comment->author,
            'content' => $comment->content,
        ]);
    }

    // ...existing code...
}