<?php

namespace App\Livewire;

use App\Models\MenuLink;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Navigation extends Component
{
    public $links;
    public $social_links;
    public function mount()
    {
        $this->links = Cache::remember('menu-links', Carbon::now()->addMonth(), function(){
            return MenuLink::where([
                ['menu_link_id',null],
                ['location', 'top'],
                ['user_id', 1],
            ])->orWhere([
                ['menu_link_id',null],
                ['location', 'both'],
                ['user_id', 1],
            ])->get();
        });

//        $this->social_links = User::find(1)->settings()->where(['group' => 'social'])->get();
    }
    public function render()
    {
        return view('livewire.navigation');
    }
}
