<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show the list of users
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // Show a specific user
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    // Store a new user
    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|integer',
            'username' => 'required|string|max:20',
            'email' => 'required|string|email|max:100|unique:user,email',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->role = $request->role;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json($user, 201);
    }

    // Update a user
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $request->validate([
            'role' => 'integer',
            'username' => 'string|max:20',
            'email' => 'string|email|max:100|unique:user,email,' . $id,
            'password' => 'string|min:6',
        ]);

        $user->role = $request->role ?? $user->role;
        $user->username = $request->username ?? $user->username;
        $user->email = $request->email ?? $user->email;

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return response()->json($user);
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
