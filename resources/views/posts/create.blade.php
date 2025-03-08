@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>


    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input 
                type="text" 
                id="title"
                name="title" 
                placeholder="Title"
                {{-- value="{{ old('title') }}" --}}
                class="@error('title') is-invalid @enderror"
            >
        </div>

        <div>
            <label for="content">Content</label>
            <textarea 
                id="content"
                name="content" 
                placeholder="Content"
                class="@error('content') is-invalid @enderror"
            >{{ old('content') }}</textarea>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
