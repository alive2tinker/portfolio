<?php

namespace App\Livewire;

use App\Models\MenuLink;
use App\Models\User;
use Livewire\Component;

class Footer extends Component
{
    public $user;
    public $links;
    public function mount()
    {
        $this->links = MenuLink::where([
            ['menu_link_id',null],
            ['location', 'bottom'],
            ['user_id', 1],
        ])->orWhere([
            ['menu_link_id',null],
            ['location', 'both'],
            ['user_id', 1],
        ])->get();

        $this->user = User::find(1);
    }
    public function render()
    {
        return view('livewire.footer');
    }
}
