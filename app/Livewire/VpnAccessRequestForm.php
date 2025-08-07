<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VpnRequest;

class VpnAccessRequestForm extends Component
{
    public $full_name;
    public $department;
    public $personal_file_number;
    public $job_title;
    public $email;
    public $telephone;
    public $address;
    public $employee_type;
    public $vpn_reason;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'personal_file_number' => 'required|string|max:100',
        'job_title' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'required|string|max:20',
        'address' => 'required|string',
        'employee_type' => 'required|string',
        'vpn_reason' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        VpnRequest::create([
            'full_name' => $this->full_name,
            'department' => $this->department,
            'personal_file_number' => $this->personal_file_number,
            'job_title' => $this->job_title,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'address' => $this->address,
            'employee_type' => $this->employee_type,
            'vpn_reason' => $this->vpn_reason,
        ]);

        session()->flash('success', 'VPN request submitted successfully!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.vpn-access-request-form');
    }
}
