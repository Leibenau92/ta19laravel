@extends('layout')
@section('title', 'Home Page')
@section('content')
    <div class="card mt-3">
        {{--<img src="..." class="card-img-top" alt="...">--}}
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{!! $post->displayBody !!}</p>
        </div>
    </div>
@endsection
