<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;

    protected $table = 'chi_tiet_don_hangs';

    protected $fillable = [
        'san_pham_id',
        'ten_san_pham',
        'so_luong',
        'don_gia',
        'is_cart',
        'don_hang_id',
        'agent_id',
        'user_id'
    ];
}
