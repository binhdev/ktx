<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class PhongStoreRequest extends FormRequest {

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
            'ten_phong' => 'required|string',
            'danh_muc_id' => 'required|integer',
            'so_khach_hien_tai' => 'required|integer|min:1'
        ];
    }
}
