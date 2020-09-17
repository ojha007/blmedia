<?php

namespace Modules\Backend\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $id = $this->route()->parameter('news_category');
        return [
//            'name' => 'required|unique:categories,name,' . $id,
            /*'slug' => 'required|unique:categories,slug,' . $id,
            'parent_id' => 'nullable|exists:categories,id',
//            'front_header_position' => 'required|numeric',
//            'front_body_position' => 'required|numeric',
//            'detail_header_position' => 'required|numeric',
//            'detail_body_position' => 'required|numeric',
//            'position' => 'required|numeric',
//            'in_front' => 'required|boolean',
            'in_mobile' => 'required|boolean',
            'category_code' => 'required|in:HM,LS,OT',
            'meta_title' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string'*/

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
