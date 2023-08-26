<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class san_pham extends Model
{
    protected $table = 'san_pham';

    // use HasFactory;
    protected $fillable = [
         'id_lp', 'tenSP', 'anh', 'gia_goc',
        'so_luong', 'gia_khuyen_mai', 'tinh_trang', 'mo_ta', 'hot', 'rate', 'view',
    ];
}
