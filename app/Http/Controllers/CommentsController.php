<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:500',
            'name' => 'nullable|string|max:255',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->content = $request->content;
        $comment->user_id = auth()->id(); // Null for anonymous users
        $comment->name = $request->name; // Name for anonymous users
        $comment->save();

        return response()->json([
            'success' => true,
            'author' => $comment->user->name ?? $comment->name ?? 'Anonymous',
            'content' => $comment->content,
        ]);
    }
}