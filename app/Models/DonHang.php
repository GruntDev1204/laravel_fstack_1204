<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = 'don_hangs';

    protected $fillable = [
        'ma_don_hang',
        'tong_tien',
        'tien_giam_gia',
        'thuc_tra',
        'agent_id',
        'user_id',
        'loai_thanh_toan',
        'is_dat_hang',
        'is_giao_hang',
    ];
}
