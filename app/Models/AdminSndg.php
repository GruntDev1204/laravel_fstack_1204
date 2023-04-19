<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class AdminSndg extends Authenticatable
{
    use HasFactory;

    protected $table = 'adminSNDGs';

    protected $fillable = [
        'ho_va_ten',
        'sdt',
        'password',
        'ghi_chu',
        'is_allow',
        'avatar',
        'is_own',
    ];
}
