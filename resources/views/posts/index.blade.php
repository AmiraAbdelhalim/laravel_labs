@extends('layouts.app')

@section('content')
<div class="container m-5">
      <a href="{{route('posts.create')}}" class="btn btn-success mb-5">Create Post</a>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->description }}</td>

                  <td>{{ $post->user ? $post->user->name : 'not exist'}}</td>
                  <td>{{ $post->created_at->format('Y-m-d') }}</td>

                <td><a href="{{route('posts.show',['post' => $post->id])}}" class="btn btn-primary btn-sm">View</a>
                <a href="{{route('posts.edit',['post' => $post->id])}}" class="btn btn-info btn-sm">Edit </a>
                <a href="{{route('posts.destroy',['post' => $post->id])}}" class="btn btn-danger btn-sm">Delete</a></td>


                </tr>
              @endforeach
              </tbody>
            </table>
            {{$posts->links()}}
      </div>


@endsection