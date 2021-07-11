@extends('welcome')

@section('title', $post->title)

@section('content')
  <h4>< <a href="{{ route('posts')}}">Back</a> </h4>
  <hr>
  <h1>{{$post->title}}</h1>
  <p>{{$post->body}}</p>
  sd
@endsection
