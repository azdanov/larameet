<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

final class EventFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }

    /** @return mixed[] */
    public function rules(): array
    {
        return [
            'name' => 'required|min:10|max:50',
            'max_attendees' => 'required|integer|digits_between:1,10',
            'venue' => 'required|string',
            'description' => 'required',
        ];
    }

    /** @return mixed[] */
    public function messages(): array
    {
        return [
            'required' => 'Please provide an event :attribute',
            'max_attendees.required' => 'What is the maximum number of attendees?',
            'name.min' => 'Event names must consist of at least 10 characters',
            'name.max' => 'Event names cannot be longer than 50 characters',
            'max_attendees.digits_between' => 'Maximum number of attendees should be between 2 and 10, including you.',
        ];
    }
}
