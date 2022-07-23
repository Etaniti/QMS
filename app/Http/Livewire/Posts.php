<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Http\Livewire\Field;
use Illuminate\Http\Request;

class Posts extends Component
{
    public $posts, $post_name, $post_id, $structure_id;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }

    private function resetInputFields(){
        $this->post_name = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
                'post_name.0' => 'required',
                'post_name.*' => 'required',
            ],
            [
                'post_name.0.required' => 'Поле обязательно для заполнения',
                'post_name.*.required' => 'Поле обязательно для заполнения',
            ]
        );

        foreach ($this->post_name as $key => $value) {
            Post::create(['post_name' => $this->post_name[$key], 'structure_id' => $this->structure_id]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        $this->dispatchBrowserEvent('refresh-page');
    }
}

