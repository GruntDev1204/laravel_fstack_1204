<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmt extends Model
{
    use HasFactory;

    protected $table = 'cmts';

    protected $fillable = [
        'content',
        'id_people',
        'id_post'
    ];
}
