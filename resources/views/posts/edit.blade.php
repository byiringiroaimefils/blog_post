@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input 
                type="text" 
                id="title"
                name="title" 
                value="{{ $post->title }}"
                class="@error('title') is-invalid @enderror"
            >
        </div>

        <div>
            <label for="content">Content</label>
            <textarea 
                id="content"
                name="content"
                class="@error('content') is-invalid @enderror"
            >{{  $post->content }}</textarea>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
