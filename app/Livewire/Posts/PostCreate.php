<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("PostCreate")]
class PostCreate extends Component
{
    #[Rule('required',message:'Plz, Enter Post Name.')]
    #[Rule('required',as:'Post Name')]
    #[Rule('min:20',as:'Post Name',message:'Plz, Enter Post Name minium 20 character.')]
    public $name = '';


    #[Rule('required',as:'Description',message:'Plz, Enter Post description.')]
    public $description = '';

    public function storePost(Post $post)
    {
        // $this->validate([
        //     'name' => 'required|string',
        //     'description' => 'required|string|max:255',
        // ]);

        $this->validate(); //method-2 with livewire rule class

        $post->create([
            'name' => $this->name,
            'slug' => \Illuminate\Support\Str::slug($this->name),
            'Description' => $this->description,
            'user_id' => Auth::user()->id,
        ]);

        $this->redirect(route('Posts.index'));
    }
    public function render()
    {
        return view('livewire.posts.post-create');
    }
}
