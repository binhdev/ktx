<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class TaiSanUpdateRequest extends FormRequest {

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
            'ten_tai_san' => 'required|string|min:3',
            'don_vi_tinh' => 'required|string|min:2',
            'so_luong' => 'required|integer',
            'tinh_trang' => 'required|string|min:2'
            'phong_id' => 'required|integer'
        ];
    }
}
