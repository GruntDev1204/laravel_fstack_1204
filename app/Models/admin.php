<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';

    protected $fillable = [
        'ho_lot',
        'ten',
        'ho_va_ten',
        'sdt',
        'password',
        'ghi_chu',
        'is_block',
        'is_allow',
        'is_own',
        'hash',
    ];
}
