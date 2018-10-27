<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class BaoHongUpdateRequest extends FormRequest {

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
            'tai_san_id' => 'required|integer',
            'mo_ta' => 'required|string|min:2',
            'nguoi_bao' => 'required|integer',
            'ngay_bao' => 'required|date|date_format:Y-m-d|after:created_at',
            'nguoi_xu_ly' => 'required|integer'
            'ngay_xu_ly' => 'required|date|date_format:Y-m-d|after:ngay_bao',
            'tinh_trang' => 'required|string'
        ];
    }
}
