<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property mixed $name
 * @property mixed $price
 * @property mixed $sort
 * @property mixed $description
 * @property mixed $category_id
 */
class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'price' => ['required','between:0,99.99'],
            'description' => ['required','string'],
            'sort' => ['required','integer'],
            'category_id' => ['required',Rule::exists('categories','id')],
            'image' => ['file','mimes:jpeg,png,jpg,gif','max:2048',]
        ];
    }
}
