<?php

namespace App\Http\Livewire;

use App\Models\PageView;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Spatie\Sitemap\SitemapGenerator;

class HomePage extends Component
{
    public $user;

    public function mount(Request $request)
    {
        PageView::updateOrCreate(['ip' => $request->ip()], [
            'ip' => $request->ip(),
            'page' => 'home'
        ]);
        $this->user = User::find(1);
        $this->social_links = $this->user->settings()->where(['group' => 'social'])->get();
        $this->contact_methods = $this->user->settings()->where('group', 'contact')->get();
        $this->experiences = $this->user->experiences;
        $this->services = $this->user->services()->where('is_featured', 1)->get();
    }
    public function render()
    {
        return view('livewire.home-page', []);
    }
}
