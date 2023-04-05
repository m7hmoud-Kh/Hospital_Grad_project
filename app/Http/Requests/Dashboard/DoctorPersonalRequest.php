<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class DoctorPersonalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required','email','unique:users,id,:'.$this->id],
            'phone_number' => ['required','regex:/(01)[0-9]{9}/','size:11'],
            'image' => ['mimes:png,jpg,jpeg'],
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'يرجي ادخال الاسم',
            'phone_number.size' => 'رقم الموبيل يتكون من 11 رقم ويبدا ب 01',
            'email.unique' => 'الايميل موجود بالفعل',
        ];
    }
}
