<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addteam extends FormRequest
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
           'name'=>'string|required',
           'affiliation'=>'string|required',
           'email'=>'string|required',
           'designation'=>'string|required',
           'position'=>'string|required',
           'committe'=>'string|required',
           'photo'=>'nullable|max:10000'
        ];
    }
}
