<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TaiSanResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'ten_tai_san' => $this->ten_tai_san,
      'don_vi_tinh' => $this->don_vi_tinh,
      'so_luong'   => $this->so_luong,
      'tinh_trang' => $this->tinh_trang,
      'phong_id'   => $this->phong_id
    ];
  }

}
