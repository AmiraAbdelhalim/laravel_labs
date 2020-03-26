@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group">
      <label >Title</label>
      <input name="title" type="text" class="form-control" aria-describedby="emailHelp" required value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name="description" class="form-control">
        {{$post->description}}
      </textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Users</label>
      <select name="user_id" class="form-control">
       
          <option value="{{$post->user->id}}">{{$post->user->name}}</option>
       
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection