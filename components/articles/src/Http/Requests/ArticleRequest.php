<?php

namespace Components\Articles\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        switch ($this->method()) {
            case 'PUT':
            case 'PATCH':
            case 'POST':
                $rules = [
                    'category_id' => 'required|integer',
                    'title' => 'required|max:255',
                    'description' => 'required|max:255',
                    'content' => 'required',
                ];
                break;
            default:
                $rules = [];
        }

        return $rules;
    }
}
