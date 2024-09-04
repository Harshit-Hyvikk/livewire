<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostShow extends Component
{
    private $postID;
    public function mount(Post $post)
    {
        // $post=Post::all();
        // dump($post);
    }

    public function Delete($postID)
    {
        $post=Post::find($postID);
        if (!$post) {
            // return back()->with('error', 'Post not found.');
            return back();
        }
        $userID=$post->user_id;
        if (Auth::check() && Auth::user()->id == $userID) {
            $post->find($postID)->delete();
        }else{
            return back();
        }
    }
    public function render()
    {
        return view('livewire.posts.post-show', ['posts' => Post::all()]);
    }
}
