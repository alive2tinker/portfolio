<?php

namespace App\Livewire;

use App\Models\MenuLink;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Footer extends Component
{
    public $rights;
    public $links;
    public function mount()
    {
        $this->links = Cache::remember('menu-links', Carbon::now()->addMonth(), function(){
            return MenuLink::where([
                ['menu_link_id',null],
                ['location', 'bottom'],
                ['user_id', 1],
            ])->orWhere([
                ['menu_link_id',null],
                ['location', 'both'],
                ['user_id', 1],
            ])->get();
        });

        $this->rights = Cache::remember('user-rights', Carbon::now()->addMonth(), function (){
            return User::find(1)->meta['rights'];
        });
    }
    public function render()
    {
        return view('livewire.footer');
    }
}
