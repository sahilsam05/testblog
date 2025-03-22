<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'post_id' => $request->post_id,
            'user_id' => auth()->id() ?? null, // Handle guest users
        ]);

        return response()->json([
            'content' => $comment->content,
            'user_name' => $comment->user->name ?? 'Guest',
        ]);
    }
}
