<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ServicesPage extends Component
{
    public $user;
    public function mount()
    {
        $this->user = User::find(1);
    }
    public function render()
    {
        return view('livewire.services-page',[
            'services' => $this->user->services()->orderby('created_at','asc')->paginate(10)
        ])->layout('layouts.app');
    }
}
