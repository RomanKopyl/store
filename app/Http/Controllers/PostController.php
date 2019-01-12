<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list()
    {
        return view('post.list', ['posts' => Post::all()]);
    }

    public function create(Request $request)
    {
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->text = $request->text ?? '';
        $post->save();

        return redirect('/post/'.$post->id);
    }

    public function read($id)
    {
        return view('post.read', ['post' => Post::find($id)]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/post/');
    }
}
