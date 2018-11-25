<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachLuuTru extends Model
{
  //
  protected $table = 'khach_luu_tru';
  protected $fillable = [
        'ho_ten', 'cmnd', 'dien_thoai', 'dia_chi', 'ngay_vao', 'ngay_ra', 'phong_id', 'loai_khach_id'
  ];
}
