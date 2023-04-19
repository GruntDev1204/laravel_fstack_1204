<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeline extends Model
{
    use HasFactory;
    protected $table = 'timelines';

    protected $fillable = [
        'month',
        'week',
        'line_one',
        'is_line_one',
        'line_two',
        'is_line_two',
        'line_three',
        'is_line_three',
        'line_four',
        'is_line_four',
        'line_five',
        'is_line_five',
    ];

}
