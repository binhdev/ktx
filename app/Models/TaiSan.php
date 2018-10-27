<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiSan extends Model
{
    protected $table = 'tai_san';
    protected $fillable = [
      'ten_tai_san', 'don_vi_tinh', 'so_luong', 'tinh_trang', 'phong_id'
    ];
}
