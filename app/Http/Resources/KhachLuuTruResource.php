<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class KhachLuuTruResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'ho_ten' => $this->ho_ten,
      'cmnd' => $this->cmnd,
      'dien_thoai' => $this->dien_thoai,
      'dia_chi' => $this->dia_chi,
      'ngay_vao' => $this->ngay_vao,
      'ngay_ra' => $this->ngay_ra,
      'phong_id' => $this->phong_id,
      'loai_khach_id' => $this->loai_khach_id
    ];
  }

}
