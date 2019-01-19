<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return mixed[] */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ];
    }
}
