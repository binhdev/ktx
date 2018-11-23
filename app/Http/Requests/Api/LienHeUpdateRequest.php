<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class LienHeUpdateRequest extends FormRequest {

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
            'ho_ten' => 'required|string|min:3',
            'dien_thoai' => 'required|string|max:10',
            'dia_chi' => 'required|string|max:500',
            'email' => 'required|string|max:100',
            'noi_dung_lien_he' => 'required|string|max:4000',
            'noi_dung_tra_loi' => 'required|string|max:4000',
            'nguoi_dung_id' => 'required|integer',
            'tinh_trang' => 'required|string'
        ];
    }
}
