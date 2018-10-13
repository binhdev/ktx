<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class LoaiKhachResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'loai_khach' => $this->loai_khach,
      'ghi_chu' => $this->ghi_chu
    ];
  }

}
