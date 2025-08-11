<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VpnRequest;

class Dashboard extends Component
{
    public $requests;

    public function mount()
    {
        if (!session()->has('email')) {
            return redirect()->route('enter-email')->with('error', 'Please enter your email to view your dashboard.');
        }

        $this->requests = VpnRequest::where('email', session('email'))->latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
