<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    use HasFactory;
    protected $table = 'donhang';
    protected $primaryKey = 'id_dh';
    public function items()
    {
        return $this->hasMany(donhangchitiet::class, 'id_dh', 'id_dh');
    }
    protected $fillable = ['id_dh', 'id_user','tongtien', 'thoidiemmua', 'tennguoinhan', 'dienthoai', 'diachigiaohang', 'trangthai'];
    public $timestamps = false;
}
