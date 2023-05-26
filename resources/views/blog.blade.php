@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title">
            <h3>{{ $post->title ?? ''}}</h3>
        </div>
        <div class="category">
            <p class="card-text"> Category : {!! $post->category->name !!}</p>
        </div>
        <div class="body">
            <p>{!! $post->body !!}</p>
        </div>
        <span><b>Author:</b>  {{ $post->user->name }}</span>
    </div>
@endsection