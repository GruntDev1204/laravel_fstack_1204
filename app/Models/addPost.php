<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addPost extends Model
{
    use HasFactory;

    protected $table = 'add_posts';

    protected $fillable = [
          'id_people',
          'content',
          'img',
          'action',
    ];
}
