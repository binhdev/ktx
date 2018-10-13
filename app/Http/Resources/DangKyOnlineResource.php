<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class DangKyOnlineResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'ho_ten' => $this->ho_ten,
      'cmnd' => $this->cmnd,
      'dia_chi' => $this->dia_chi,
      'ngay_vao' => $this->ngay_vao,
      'ngay_di' => $this->ngay_di,
      'phong_id' => $this->phong_id,
      'loai_khach_id' => $this->loai_khach_id
    ];
  }

}
