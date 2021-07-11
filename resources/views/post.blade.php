@extends('welcome')
@section('title', 'Create New Post | All Posts')
@section('content')
<h1>Create New Post</h1>
<form method="POST" action="/store">
  @csrf
  <input type="text" name="title" placeholder="title">
  <input type="text" name="body" placeholder="body">
  <button type="submit">Submit</button>
</form>
<br>
<hr>
  <h1>All Posts</h1>
  @foreach ($post as $posts)
  <h4><a href="{{ route('show', $posts->slug )}}"> {{ $posts->title }} </a></h4>
  @endforeach
@endsection
