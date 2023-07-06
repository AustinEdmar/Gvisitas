<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birthday' => 'string|nullable',
            'email' => 'required|email',
            'image' => 'string|nullable',
            'phone_number' => 'string|nullable',
            'police_rank_id' => 'string|nullable',
           // 'level_id' => 'string|nullable',
            'direction_id' => 'string|nullable',
            'department_id' => 'string|nullable',
            'section_id' => 'string|nullable',
            'gender_id' => 'string|nullable',
           // 'status_id' => 'string|nullable',
            'password' => 'required|string|min:8|max:30|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/', // uma letra pelo menos mauiscula
        ];
    }
}
