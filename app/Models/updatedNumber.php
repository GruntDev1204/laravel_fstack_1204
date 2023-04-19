<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class updatedNumber extends Model
{
    protected $table = 'updated_numbers';

    protected $fillable = [
        'followers',
        'nft',
        'twitter',
        'holders',
    ];
}
