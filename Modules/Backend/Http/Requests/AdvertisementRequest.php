<?php

namespace Modules\Backend\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'image' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'url' => 'required',
            'for' => 'required',
            'sub_for' => ['nullable'],
            'placement' => 'required',
            'description' => 'nullable',
            'sub_description' => 'nullable|max:255',
            'is_active' => 'required|boolean',
            'sub_placement' => 'nullable',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
