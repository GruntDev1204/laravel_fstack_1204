<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main extends Authenticatable
{
    use HasFactory;
    protected $table = 'mains';

    protected $fillable = [
        'ho_lot',
        'ten',
        'ho_va_ten',
        'sdt',
        'password',
        'email',
        'is_allow',
    ];
}
