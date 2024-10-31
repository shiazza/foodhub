<?php

namespace App\Http\Controllers;

use App\Models\DisplayUser;
use Illuminate\Http\Request;

class DisplayUserController extends Controller
{
    public function index()
    {
        $displayUsers = DisplayUser::all();
        return response()->json($displayUsers);
    }

    public function show($id)
    {
        $displayUser = DisplayUser::find($id);
        return response()->json($displayUser);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'username' => 'required|string|max:20',
            'name' => 'required|string',
            'bio' => 'string|nullable',
            'rating' => 'integer|nullable',
            'co_following' => 'integer|nullable',
            'co_followers' => 'integer|nullable',
            'following' => 'integer|nullable',
            'followers' => 'integer|nullable',
            'joined' => 'date|nullable',
        ]);

        $displayUser = DisplayUser::create($request->all());
        return response()->json($displayUser, 201);
    }

    public function update(Request $request, $id)
    {
        $displayUser = DisplayUser::find($id);

        if (!$displayUser) {
            return response()->json(['message' => 'Display User not found'], 404);
        }

        $displayUser->update($request->all());
        return response()->json($displayUser);
    }

    public function destroy($id)
    {
        $displayUser = DisplayUser::find($id);

        if (!$displayUser) {
            return response()->json(['message' => 'Display User not found'], 404);
        }

        $displayUser->delete();
        return response()->json(['message' => 'Display User deleted successfully']);
    }
}
