<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class ProfileController extends Controller
{
    public function showProfile($username)
    {
        $displayUser = User::where('username', $username)->firstOrFail();
        $isFollowing = auth()->user()->following()->where('id', $displayUser->id)->exists();

        $posts = Post::where('user_id', $displayUser->id)->get();

        return view('profile', [
            'displayUser' => $displayUser,
            'isFollowing' => $isFollowing,
            'posts' => $posts
        ]);
    }

    public function follow($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->following()->where('id', $user->id)->exists()) {
            auth()->user()->following()->detach($user->id); // Unfollow
        } else {
            auth()->user()->following()->attach($user->id); // Follow
        }

        return redirect()->back();
    }
}
