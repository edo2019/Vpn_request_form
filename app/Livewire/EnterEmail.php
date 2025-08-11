<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VpnRequest;

class EnterEmail extends Component
{
    public $email;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        // Check if email exists in VPN requests
        if (VpnRequest::where('email', $this->email)->exists()) {
            session(['email' => $this->email]);
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'No VPN requests found for this email.');
        }
    }
    public function render()
    {
        return view('livewire.enter-email');
    }
}
