<?php

namespace Components\Articles\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleCategoryRequest extends FormRequest
{
    public function rules()
    {
        $rules = [];

        switch ($this->method()) {
            case 'POST':
                $rules = [
                    'title' => 'required|max:255|unique:article_categories',
                ];
                break;
            case 'PUT':
            case 'PATCH':
                $rules = [
                    'title' => 'required|max:255|unique:article_categories,title,' . $this->title,
                ];
                break;
            default:
                $rules = [];
        }

        return $rules;
    }
}
