<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
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
            'email' => ['required','email','unique:users'],
            'phone_number' => ['required','regex:/(01)[0-9]{9}/','size:11'],
            'image' => ['required','mimes:png,jpg,jpeg'],
            'password' => ['required', 'string', 'min:6' ,'confirmed'],
            'national_id' => ['required', 'regex:/[0-9]{14}/','size:14','unique:users']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجي ادخال الاسم',
            'phone_number.size' => 'رقم الموبيل يتكون من 11 رقم ويبدا ب 01',
            'password.confirmed' => 'كلمه السر غير متطابقه',
            'image.required' => 'يرجي ارفاق الصوره',
            'national_id.unique' => 'الرقم القومي موجود بالفعل',
        ];
    }
}
