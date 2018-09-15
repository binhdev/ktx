<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource {

  /**
   * @var type
   */
  public function toArray($request){
    return [
      'id' => $this->id,
      'name' => $this->name,
      'email' => $this->email
    ];
  }

}
