<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BaoHongResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'tai_san_id' => $this->tai_san_id,
      'mo_ta' => $this->mo_ta,
      'nguoi_bao_id'   => $this->nguoi_bao_id,
      'ngay_bao' => $this->ngay_bao,
      'ngay_xu_ly'   => $this->ngay_xu_ly,
      'nguoi_xu_ly' => $this->nguoi_xu_ly,
      'tinh_trang' => $this->tinh_trang
    ];
  }

}
