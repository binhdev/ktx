<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class DanhMucStoreRequest extends FormRequest {

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
            'ten_danh_muc' => 'required|string',
            'ghi_chu' => 'required|string'
        ];
    }
}
