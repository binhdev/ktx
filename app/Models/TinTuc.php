<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tin_tuc';
    protected $fillable = [
      'tieu_de', 'tom_tat', 'noi_dung', 'anh_minh_hoa', 'file_dinh_kem',
      'ngay_dang_tin', 'the_loai_tin_id'
    ];
}
