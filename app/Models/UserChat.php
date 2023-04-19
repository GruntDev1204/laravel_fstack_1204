<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserChat extends Authenticatable
{
    use HasFactory;
    protected $table = 'user_chats';

    protected $fillable = [
        'full_name',
        'sdt',
        'password',
    ];
}
