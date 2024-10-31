<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return response()->json($comments);
    }

    public function show($id)
    {
        $comment = Comment::find($id);
        return response()->json($comment);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_display' => 'required|integer',
            'com' => 'required|string',
        ]);

        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        $comment->update($request->all());
        return response()->json($comment);
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        $comment->delete();
        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
