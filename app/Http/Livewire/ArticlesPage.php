<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Wink\WinkPost;
use App\Models\User;

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
