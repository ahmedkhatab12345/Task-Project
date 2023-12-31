<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportExportRequest extends FormRequest
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
            'file' => 'required|mimes:xlsx,xls|max:10240',

        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'File is required!',
            'file.mimes' => 'File must be in a valid Excel format (xlsx, xls)!',
            'file.max' => 'File size should not exceed 10 KB!'
        ];
    }
}
