<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostController extends Controller
{
    //
    public function index()
    {
        
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show()
    {
        $request= request();
        $post_id= $request->post;
        $post=Post::find($post_id);
        
        return view('posts.show',[
            'post'=> $post
        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store()
    {
        $request=request();
        Post::create([
            'title' => $request->title,
            'description'=> $request->description,
            'user_id'=> $request->user_id
        ]);

        return redirect()->route('posts.index');
    }

    public function edit()
    {
        
        $request= request();
        $post_id= $request->post;
        $post = Post::find($post_id);
        return view('posts.edit',[
            'post'=> $post
        ]);
    }

    

    public function update(Request $request, $post)
    {
        ////////dd($post);
        
        
        Post::find($post)->update([
            'title'=>$request->title,
            'description'=> $request->description,
            'user_id'=> $request->user_id

        ]);
        return redirect()->route('posts.index');


    }

    public function destroy($post)
    {
        
        $post_id = Post::find($post);
        $post_id->delete();
        return redirect()->route('posts.index');
    }


}
