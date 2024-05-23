<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function all_posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post.posts', compact('posts'));
    }

    public function single_post(Request $request, $id)
    {
        $posts = Post::where('id', $id)->get();
        return view('post.single_post', compact('posts'));
    }




    public function add_post()
    {
        return view('post.add_post');
    }
    public function add_post_store(PostRequest $request)
    {
        $user = Auth::guard('admin')->user();
        $post = Post::create([
            "user_id" => $user->id,
            'title' => $request->title,
            'desc' => $request->description
        ]);
        if ($post) {
            toastr()->success('Post Added Successfully');
            return redirect()->route('all_posts');
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }
    }
}
