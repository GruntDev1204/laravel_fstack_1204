<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    use HasFactory;

    protected $table = 'danhmucs';

    protected $fillable = [
        'name_danh_muc',
        'slug_danh_muc',
         'id_danh_muc_cha',
    ];
}
