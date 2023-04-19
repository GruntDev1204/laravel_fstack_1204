<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followed extends Model
{
    use HasFactory;

    protected $table = 'followeds';

    protected $fillable = [
       'id_user',
       'id_user_another',
       'is_followed',
    ];
}
