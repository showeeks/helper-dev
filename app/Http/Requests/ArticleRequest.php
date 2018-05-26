<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ArticleRequest
 * @package App\Http\Requests
 * @property string|null title
 * @property string|null body
 * @property string|null type
 */
class ArticleRequest extends FormRequest
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
        switch ($this->method()){
            case 'POST':
            {
                return [
                    'title' => 'required',
                    'parentId' => 'required',
                    'body' => 'required',
                    'type' => 'in:left,right',
                ];
            }
            default:{
                return [];
            }
        }
    }

    // TODO: article request need message method
}
