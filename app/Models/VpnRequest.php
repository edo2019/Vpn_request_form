<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VpnRequest extends Model
{
    protected $fillable = [
        'full_name',
        'department',
        'personal_file_number',
        'job_title',
        'email',
        'telephone',
        'address',
        'employee_type',
        'vpn_reason',
    ];

}
