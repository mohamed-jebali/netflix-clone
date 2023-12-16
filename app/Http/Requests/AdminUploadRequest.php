<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_content' => 'required',
            'content_charged' => 'required',
            'is_arrived' => 'required',
            'duration' => 'required',
        ];
    }

    public function messages() {
        return [
            "name_content.required" => "il nome del contenuto è obbligatorio.",
            "content_charged.required" => "il contenuto è obbligatorio.",
        ];
    }
}
