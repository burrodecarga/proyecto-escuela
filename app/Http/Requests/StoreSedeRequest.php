<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSedeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->hasRole('super-admin');

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //dd($_FILES);
        return [
            'school_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'department' => 'required',
            'municipality' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'cell' => 'required',
            'logo' => 'sometimes|max:2000|mimes:jpeg,png,bmp,jpg',
            'image' => 'sometimes|max:2000|mimes:jpeg,png,bmp,jpg',
        ];
    }
}
