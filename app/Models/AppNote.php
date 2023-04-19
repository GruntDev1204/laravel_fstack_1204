<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppNote extends Model
{
    use HasFactory;

    protected $table = 'app_notes';

    protected $fillable = [
        'title',
        'reason',
        'content',
        'name_writer',
        'email',
        'ask',
    ];
}
