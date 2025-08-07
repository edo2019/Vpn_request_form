<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VpnRequest;

class VpnRequestApproval extends Component
{
    public $requests;

    public function mount()
    {
        // Fetch all pending requests when the component is loaded
        $this->requests = VpnRequest::where('status', 'pending')->get();
    }

    public function render()
    {
        return view('livewire.vpn-request-approval');
    }

    // Method to approve a request
    public function approve($requestId)
    {
        $request = VpnRequest::findOrFail($requestId);
        $request->status = 'approved';
        $request->save();

        session()->flash('message', 'VPN request approved successfully.');

        // Refresh the list of requests
        $this->requests = VpnRequest::where('status', 'pending')->get();
    }

    // Method to reject a request
    public function reject($requestId)
    {
        $request = VpnRequest::findOrFail($requestId);
        $request->status = 'rejected';
        $request->save();

        session()->flash('message', 'VPN request rejected.');

        // Refresh the list of requests
        $this->requests = VpnRequest::where('status', 'pending')->get();
    }

}
