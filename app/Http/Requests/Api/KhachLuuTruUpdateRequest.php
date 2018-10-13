<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class DanhMucUpdateRequest extends FormRequest {

    /**
     * Description
     * @return type
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ho_ten' => 'required|string',
            'cmnd' => 'required|string',
            'ngay_vao' => 'required|string',
            'ngay_ra' => 'required|string',
            'phong_id' => 'required|integer',
            'loai_khach_id' => 'required|integer',
        ];
    }
}
