<?php

namespace Modules\Backend\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Entities\News;

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
            'reporter_id' => 'nullable|exists:reporters,id',
            'guest_id' => 'nullable|exists:guests,id',
            'description' => 'required',
            'image_caption' => 'nullable|string|max:255',
            'short_description' => 'nullable',
            'external_url' => 'nullable',
            'publish_date' => 'required|date',
            'expiry_date' => 'nullable|date',
            'image' => 'nullable',
            'video_url' => 'nullable',
            'is_flash' => 'required|boolean',
            'is_fixed' => 'required|boolean',
            'publish_status' => 'required|in:' . implode(',', News::publishStatus()),
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
