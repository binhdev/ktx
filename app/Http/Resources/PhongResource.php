<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PhongResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'ten_phong' => $this->ten_phong,
      'danh_muc_id' => $this->danh_muc_id,
      'so_khach_hien_tai' => $this->so_khach_hien_tai,
      'ghi_chu' => $this->ghi_chu
    ];
  }

}
