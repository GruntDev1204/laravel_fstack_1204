<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatApp extends Model
{
    use HasFactory;
    protected $table = 'chat_apps';

    protected $fillable = [
        'id_user',
        'content'
    ];
}
