<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
        $user = Auth::guard('admin')->user() ; 
        $post = Post::where('id', $id)->first();

        return view('post.single_post', compact(['post','user']));
    }


    public function add_comment(Request $request , $id){
        
        $user = Auth::guard('admin')->user() ; 
        $message = $request->message ;
        $post_id = $id ;  

        $comment = Comment::create([
            'user_id' => $user->id , 
            'post_id' => $post_id , 
            'message' => $message
        ]);

        if($comment){
            toastr()->success('comment-added');
            return redirect()->route('single_post_view',['id' => $post_id]);
        }
        else{
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }

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
            return redirect()->route('all_posts_view');
        } else {
            toastr()->error('Something Went Wrong!');
            return redirect()->back();
        }
    }
}
