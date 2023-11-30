<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nev' => ['string', 'required'],
        ];
    }
}
