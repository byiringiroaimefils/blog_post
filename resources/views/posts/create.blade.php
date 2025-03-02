@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input 
                type="text" 
                id="title"
                name="title" 
                placeholder="Title"
                value="{{ old('title') }}"
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
                placeholder="Content"
                class="@error('content') is-invalid @enderror"
            >{{ old('content') }}</textarea>
            @error('content')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
