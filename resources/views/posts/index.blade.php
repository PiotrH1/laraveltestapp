@extends('layouts.app')

@section('content')
<h2>Posts</h2>
@if (count($post)>0)
@foreach ($post as $pos)
<div class="well" >
    <h3 >
    <a href="/post/{{$pos->id}}"> {{$pos->title}}</a>
    </h3>
<small>writed on {{$pos->created_at}}</small>
</div>
@endforeach
  {{$post->links()}}
@else
<p>No posts found</p>
@endif
@endsection
