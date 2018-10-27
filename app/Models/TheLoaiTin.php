<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheLoaiTin extends Model
{
    protected $table = 'the_loai_tin';
    protected $fillable = [
      'ten_the_loai', 'ghi_chu'
    ];
}
