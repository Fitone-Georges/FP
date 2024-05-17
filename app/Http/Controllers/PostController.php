<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function display()
    {

    //     if($user->post_id == 'user_id')
    //     {
    //         $posts = Post::find('user_id' , 'post_id')->get();
    //         return view('post', ['posts' => $posts ?? []]);
    //     }
    //     return $user->id === $post->user_id
    //         ? Response::allow()
    //         : Response::deny('You do not own this post.');
    // }

    $posts = Post::all();
                return view('post',compact("posts"));
}
}
