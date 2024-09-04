<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Posts")]
class PostCreate extends Component
{
    public $post = '';
    public $post1 = '';

    public $posts = [
        'post-1',
        'post-2',
    ];
    // public $posts = '';

    // public function mount()
    // {
    //     // initialize a static components
    //     $this->posts = [
    //         'post-1',
    //         'post-2',
    //     ];

    //     $this->post = 'Typing Post....';
    // }



    // public function updated($property, $value)  // that is for all property not only $post
    // {
    //     // dd($property,$value);
    //     $this->post = strtoupper($value);
    // }



    public function updatedPost($value)  // that is only $post property
    {
        $this->post = strtoupper($value); //you can also validate value of post
    }
    public function add()
    {
        // Check and add $post1 to the posts array
        if (!empty($this->post1)) {
            $this->posts[] = $this->post1;
            $this->reset('post1'); // Reset using the reset method
        }

        // Check and add $post to the posts array
        if (!empty($this->post)) {
            $this->posts[] = $this->post;
            $this->reset('post'); // Reset using the reset method
        }

        // Alternatively, you can manually reset the values
        $this->post = '';
        $this->post1 = '';
    }
    public function render()
    {
        return view('livewire.post-create');
    }
}
