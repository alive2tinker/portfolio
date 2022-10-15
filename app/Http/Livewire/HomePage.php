<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HomePage extends Component
{
    public $user;

    public function mount()
    {
        $this->user = User::find(1);
        $this->social_links = $this->user->settings()->where(['group' => 'social'])->get();
        $this->contact_methods = $this->user->settings()->where('group', 'contact')->get();
        $this->experiences = $this->user->experiences;
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
