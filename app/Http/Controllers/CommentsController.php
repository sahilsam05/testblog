<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Ensure only authenticated users can access this controller
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:500',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->content = $request->content;
        $comment->user_id = auth()->id();
        $comment->save();

        return response()->json([
            'success' => true,
            'author' => $comment->user->name,
            'content' => $comment->content,
        ]);
    }
}