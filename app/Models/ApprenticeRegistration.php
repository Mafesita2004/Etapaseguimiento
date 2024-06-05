<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprenticeRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification',
        'name',
        'last_name',
        'program',
        'file',
        'phone',
        'email',
        'start_contract',
        'contract_end',
        'nit_company',
        'business_name',
        'address',
        'city',
        'assigned_instructor',
        'date_assignment',
        'password',
    ];
}
