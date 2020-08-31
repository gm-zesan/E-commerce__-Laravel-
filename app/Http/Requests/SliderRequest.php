<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
        if(isset($this->id)){
            return[
                'ftitle' => 'required|max:50|unique:sliders,sliders_first_title,'.$this->id
            ];
        }
        return[
            'ftitle' => 'required|max:50|unique:sliders,sliders_second_title,'
        ];
    }
}
