<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Student;

class StudentRequest extends FormRequest
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
            'full_name' => 'required|string',
            'student_number' => 'required|integer|unique:students,student_number',
            'address' => 'required|string',
            'dob' => 'required|date'
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'full_name.required' => 'Please enter Student Name!',
            'student_number.required' => 'Student number is required!',
            'address.required' => 'Enter an address!',
            'dob.required' => 'Please select a Date!'
        ];
    }
}
