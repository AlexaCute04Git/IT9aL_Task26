
@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}" required>
    <textarea name="body" required>{{ $post->body }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection