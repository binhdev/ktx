<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class TinTucStoreRequest extends FormRequest {

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
            'tieu_de' => 'required|string|min:3',
            'tom_tat' => 'required|string',
            'noi_dung' => 'required|string',
            'anh_minh_hoa' => 'required|mimes:jpg,jpeg,png|max:2048',
            'file_dinh_kem' => 'required|mimes:zip,pdf|max:2048',
            'ngay_dang_tin' => 'required|date',
            'the_loai_tin_id' => 'required|integer'
        ];
    }
}
