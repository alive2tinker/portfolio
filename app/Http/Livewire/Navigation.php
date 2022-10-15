<?php

namespace App\Http\Livewire;

use App\Models\MenuLink;
use Livewire\Component;

class Navigation extends Component
{
    public function mount()
    {
        $this->links = MenuLink::where([
            ['menu_link_id',null],
            ['location', 'top'],
            ['user_id', 1],
        ])->orWhere([
            ['menu_link_id',null],
            ['location', 'both'],
            ['user_id', 1],
        ])->get();
    }
    public function render()
    {
        return view('livewire.navigation');
    }
}
