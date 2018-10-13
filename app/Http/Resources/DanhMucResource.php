<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class DanhMucResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'ten_danh_muc' => $this->ten_danh_muc,
      'ghi_chu' => $this->ghi_chu
    ];
  }

}
