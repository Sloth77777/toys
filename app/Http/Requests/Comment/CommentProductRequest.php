<?php

declare(strict_types=1);


namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CommentProductRequest extends FormRequest
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
            'message' => 'required|string',
            'product_id' => 'required|integer|exists:products,id'
        ];
    }
}


