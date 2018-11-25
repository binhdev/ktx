<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiKhach extends Model
{
    //
    protected $table = 'loai_khach';
  protected $fillable = [
        'loai_khach', 'ghi_chu'
  ];
}
