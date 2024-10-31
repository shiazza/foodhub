@extends('layouts.app')

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <img src="/images/profile-placeholder.png" class="profile-picture" alt="Profile Picture">
        
        <div class="profile-info">
            <h2>{{ $displayUser->username }}</h2>
            <p class="bio">{{ $displayUser->bio }}</p>
            <p class="rating">Rating: {{ number_format($displayUser->rating, 1) }}/5</p>

            <form action="{{ route('follow', $displayUser->id) }}" method="POST">
                @csrf
                @if ($isFollowing)
                    <button class="unfollow-button">Unfollow</button>
                @else
                    <button class="follow-button">Follow</button>
                @endif
            </form>

            <div class="follow-stats">
                <span>{{ $displayUser->followers->count() }} Followers</span>
                <span>{{ $displayUser->following->count() }} Following</span>
            </div>
        </div>
    </div>

    <div class="posts-section">
        <h3>Posts</h3>
        <div class="posts-grid">
            @foreach($posts as $post)
                <div class="post-card">
                    <img src="{{ asset('storage/' . $post->image_path) }}" class="post-image" alt="Post Image">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ Str::limit($post->description, 80) }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="view-link">View Recipe</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
