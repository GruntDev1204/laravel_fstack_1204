<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Chap extends Authenticatable
{
    use HasFactory;

    protected $table = 'chaps';

    protected $fillable = [
        'ho_lot',
        'ten',
        'ho_va_ten',
        'so_dien_thoai',
        'email',
        'password',
        'dia_chi',
        'thanh_pho',
        'is_block',
        'is_vail',
        'hash',
    ];
}
