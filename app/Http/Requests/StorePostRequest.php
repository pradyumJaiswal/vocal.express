<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;


class StorePostRequest extends FormRequest
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
            'body' => ['nullable','string'],
            
            'attachments' =>'array|max:15',
            
            'attachments.*' => [
                'file',
                File::types([
                    'jpg','jpeg','png','webp','gif',
                    'mp3','wav','mp4',
                    'doc','docx','pdf','csv','exls',
                    'zip'
                ])->max(500 * 1024 * 1024)
            ],
            
            'user_id' => ['numeric']
        ];
    }

    protected function prepareForValidation(){
        $this->merge(['user_id' => auth()->user()->id]);
    }
}
