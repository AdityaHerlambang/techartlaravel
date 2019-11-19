<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index() {
        return view('main');
    }

    public function create(Request $req) {
        $post = new Post();
        $post->title = $req->input('title');
        $post->content = $req->input('content');
        $post->save();

        return redirect(route('index'));
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('edit')->with(compact('post'));
    }

    public function update($id, Request $req) {
        $post = Post::find($id);
        $post->title = $req->input('title');
        $post->content = $req->input('content');
        $post->save();

        return redirect(route('index'));
    }

    

}
