@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input 
                type="text" 
                id="title"
                name="title" 
                value="{{ old('title', $post->title) }}"
                class="@error('title') is-invalid @enderror"
            >
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="content">Content</label>
            <textarea 
                id="content"
                name="content"
                class="@error('content') is-invalid @enderror"
            >{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
