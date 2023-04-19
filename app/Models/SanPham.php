<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_phams';

    protected $fillable = [
        'ten_san_pham',
        'slug_san_pham',
        'so_luong',
        'gia_ban',
        'gia_khuyen_mai',
        'anh_dai_dien',
        'mo_ta_ngan',
        'mo_ta_chi_tiet',
        'id_danh_muc',
        'is_open'
    ];
}
