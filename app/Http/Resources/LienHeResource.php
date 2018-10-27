<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class LienHeResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'ho_ten' => $this->ho_ten,
      'dien_thoai' => $this->dien_thoai,
      'dia_chi'   => $this->dia_chi,
      'email' => $this->email,
      'noi_dung_lien_he'   => $this->noi_dung_lien_he,
      'noi_dung_tra_loi' => $this->noi_dung_tra_loi,
      'nguoi_dung_id' => $this->nguoi_dung_id,
      'tinh_trang' => $this->tinh_trang
    ];
  }

}
