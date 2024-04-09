<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsPage extends Component
{
    use WithPagination;

    public $user;
    public function mount()
    {
        $this->user = User::find(1);
    }
    public function render()
    {
        return view('livewire.projects-page',[
            'projects' => Project::where('user_id', $this->user->id)->orderby('created_at','desc')->paginate(9)
        ])->layout('layouts.app');
    }
}
