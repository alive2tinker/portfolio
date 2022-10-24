<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ProjectsPage extends Component
{
    public $user;

    public function mount()
    {
        $this->user = User::find(1);
    }
    public function render()
    {
        return view('livewire.projects-page');
    }
}
