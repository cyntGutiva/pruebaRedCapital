<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveDocumentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        date_default_timezone_set('America/Santiago');
        return [
            'ndocument' => 'required',
            'description' => 'required',
            // 'archive' => 'required|mimes:pdf',
        ];
    }
}
