<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class TweetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function filtered()
    {
        return [
            'text' => $this->get('text'),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }

    // TODO Response do not return JSON
}
