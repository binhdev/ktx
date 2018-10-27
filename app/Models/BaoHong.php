<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaoHong extends Model
{
    protected $table = 'bao_hong';
    protected $fillable = [
    	'tai_san_id', 'mo_ta', 'nguoi_bao', 'ngay_bao', 'nguoi_xu_ly', 'ngay_xu_ly', 'tinh_trang'
    ];
}
