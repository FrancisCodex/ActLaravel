<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reqPrompt extends FormRequest
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
        if(request()->routeIs('prompts.store')){
            return [
                'prompt' => 'required|string|max:255',
                'sender' => 'required|string|min:5',
                'user_id' => 'required|integer',
            ];
        }
        else if(request()->routeIs('prompts.update')){
            return [
                'prompt' => 'required|string|max:255',
            ];
        }
       

    }
}
