@extends('layout')
@section('title', 'Home Page')
@section('content')
    <a href="{{route('admin.posts.create')}}" class="btn btn-primary">New Posts</a>
    {{$posts->links()}}
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Created At</th>
        <th>Modified At</th>
        <th>Actions</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a class="btn btn-primary">View</a>
                    <a class="btn btn-warning">Edit</a>
                    <a class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
@endsection

