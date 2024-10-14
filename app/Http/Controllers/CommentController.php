<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }

    public function show(Comment $comment)
    {
        return $comment;
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return response()->json($comment);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(null, 204);
    }
}
