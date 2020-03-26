@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body align-item-center">
            <h5 class="card-title">Post Info</h5>
            <h5 class="card-text">Post Title:- {{$post->title}}</h5>
            <p class="card-text">Post Description:- {{$post->description}}</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body align-item-center">
            <h5 class="card-title">User Info</h5>
            <h5 class="card-text">User: {{$post->user ? $post->user->name : 'not exist'}}</h5>
            <p class="card-text">Email: {{$post->user ? $post->user->email : 'not exist'}}</p>
            <p class="card-text">Created At: {{$post->created_at->format('l j F Y, h:m:s a')}}</p>

        </div>
    </div>

@endsection