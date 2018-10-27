<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danh_muc';
    protected $fillable = [
        'ten_danh_muc', 'ghi_chu'
    ];
}
