<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Wink\WinkPage;

class AboutPage extends Component
{
    public $page;
    public $socialLinks = [];
    public $user;

    public function mount()
    {
        $this->user = User::find(1);
        $this->page = WinkPage::where('title','About Page')->first();
        $this->socialLinks = $this->user->settings()->where(['group' => 'social'])->get();
    }
    public function render()
    {
        return view('livewire.about-page');
    }
}
