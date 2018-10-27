<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TheLoaiTinResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'ten_the_loai' => $this->ten_the_loai,
      'ghi_chu' => $this->ghi_chu
    ];
  }

}
