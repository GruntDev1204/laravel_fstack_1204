<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppBill extends Model
{
    use HasFactory;
    protected $table = 'app_bills';
    protected $fillable = [
        'name',
        'price',
        'so_luong',
    ];
}
