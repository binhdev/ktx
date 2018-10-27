<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TinTucResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'tieu_de' => $this->tieu_de,
      'tom_tat' => $this->tom_tat,
      'noi_dung'   => $this->noi_dung,
      'anh_minh_hoa' => $this->anh_minh_hoa,
      'file_dinh_kem'   => $this->file_dinh_kem,
      'ngay_dang_tin' => $this->ngay_dang_tin,
      'the_loai_tin_id' => $this->the_loai_tin_id
    ];
  }

}
