<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::check()) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "user_id" => [ "required", "numeric", "integer", "exists:user,id"],
            "title" => [ "required", "string", "min:3", "max:255",
                        Rule::unique("posts")->ignore($this->post)
                    ],
            "date" => ["required", "date"],
            "description" => ["required", "text", "min:15"],
            "content" => [ "required", "text", "min:15"],
            "categories" => ["array"],
            "categories.*" => ["integer", "numeric", "exists:categories,id", "min:1"],
        ];
    }
}