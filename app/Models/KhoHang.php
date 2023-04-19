<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhoHang extends Model
{
    use HasFactory;

    protected $table = 'kho_hangs';

    protected $fillable = [
        'id_san_pham',
        'ten_san_pham',
        'so_luong',
        'don_gia',
        'thanh_tien',
        'type',
        'hash',
    ];
}
