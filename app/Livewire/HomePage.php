<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\PageView;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class HomePage extends Component
{
    public $user;
    public $social_links;
    public $contact_methods;
//    public $experiences;
    public $services;

    // form input

    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;

    public $receivedContactRequest = false;
    public function mount(Request $request)
    {
        PageView::updateOrCreate(['ip' => $request->ip()],[
            'ip' => $request->ip(),
            'page' => 'home'
        ]);
        $this->user = User::with(['projects','skills','experiences','services' => function($q) {
            $q->where('is_featured',1);
        }])->find(1);
        $this->social_links = $this->user->settings()->where(['group' => 'social'])->get();
        $this->contact_methods = $this->user->settings()->where('group', 'contact')->get();
    }

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
    ];

    public function getContact()
    {
        if($this->validate()){
            Contact::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message
            ]);

            $this->receivedContactRequest = true;
        }
    }
    public function render()
    {
        return view('livewire.home-page')->layout('layouts.app');
    }
}
