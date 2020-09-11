<?php

namespace Modules\Backend\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'sub_title' => 'nullable|string|max:255',
            'tag_line' => 'nullable',
            'reporter_id' => ['nullable'],
            'guest_id' => ['nullable'],
            'description' => 'required',
            'short_description' => 'nullable',
            'external_url' => 'nullable',
            'publish_time' => 'required|date',
            'expiry_date' => 'nullable|date',
            'is_fixed' => 'required|boolean'
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
