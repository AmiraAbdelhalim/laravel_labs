<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    //

    public function index(){
        return PostResource::collection(Post::all());
    }


    public function show($post){
        return new PostResource(Post::find($post));
    }


    public function store(Request $request){
        return Post::create([
                'title' => $request->title,
                'description'=> $request->description,
                'user_id'=> $request->user_id
            ]);

    }
}
