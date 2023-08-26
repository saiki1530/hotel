<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai_phong extends Model
{
    use HasFactory;

    protected $table = 'loai_phong'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = ['loaiphong']; // Các cột có thể gán dữ liệu

    // Các cột ngày tháng tự động
    public $timestamps = true;
}
