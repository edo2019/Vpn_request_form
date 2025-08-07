<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VpnRequest;
class Dashboard extends Component
{
     public $requests;

    public function mount()
    {
        // Fetch only the authenticated user's requests
        $this->requests = VpnRequest::where('user_id', Auth::id())
            ->latest()
            ->get();
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
