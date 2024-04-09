<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Wink\WinkPost;

class ArticlesPage extends Component
{
    public $articles = [];
    public $user;

    public function mount()
    {
        $this->user = User::find(1);
        $this->articles = WinkPost::all();
    }
    public function render()
    {
        return view('livewire.articles-page');
    }
}
