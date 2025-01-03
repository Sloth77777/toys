<?php

declare(strict_types=1);


namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1255',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'category_id' => 'required|exists:product_categories,id',
        ];
    }
}


