<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ServicesPage extends Component
{
    public function mount()
    {
        $this->user = User::find(1);
    }
    public function render()
    {
        return view('livewire.services-page',[
            'services' => $this->user->services()->orderby('created_at','asc')->paginate(10)
        ]);
    }
}
