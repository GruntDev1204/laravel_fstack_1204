<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theStory extends Model
{
    use HasFactory;

    protected $table = 'the_stories';

    protected $fillable = [
        'title',
        'content',
    ];

}
