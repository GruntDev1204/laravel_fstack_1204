<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class People extends Authenticatable
{
    use HasFactory;
    protected $table = 'people';

    protected $fillable = [
        'ho_va_ten',
        'birth',
        'detail',
        'education',
        'location',
        'skill',
        'note',
        'sdt',
        'avatar',
        'password',
        'hash',
        'email',
        'is_info',
        'follower',
        'following',
        'is_allow',
    ];
}
