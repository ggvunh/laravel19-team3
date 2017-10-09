<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class roomRequest extends FormRequest
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
            'room_name' => 'required',
            'room_price'=> 'required|numeric',
            'amount_people'=>'required|max:2',
        ];
    }
}
