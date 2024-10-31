<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePost extends Component
{
    
    /* tenemos que declarar la variable que pasamos desde la vista */
    public $title = "TITULO M4";

/*     public function mount($title= null)
    {
        $this->title = $title; // Inicializa el título
    }   */  

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}


