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
        return [
            'title' => 'required|unique:news_categories,slug',
            'slug' => 'required|unique:news_categories,slug',
            'tag_line' => 'nullable',
            'parent_id' => 'nullable|exists:news_categories,id',
            'position' => 'required|numeric',
            'in_front' => 'required|boolean',
            'in_mobile' => 'required|boolean',
            'category_code' => 'required|in:HM,LS,OT',
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
