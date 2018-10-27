<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    protected $table = 'lien_he';
    protected $fillable = [
      'ho_ten',
      'dien_thoai',
      'dia_chi',
      'email',
      'noi_dung_lien_he',
      'noi_dung_tra_loi',
      'nguoi_dung_id',
      'tinh_trang'
    ];
}
