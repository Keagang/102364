<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Student;

class FeesStoreRequest extends FormRequest
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
            'student_id' => 'required|integer|exists:students,student_number',
            'amount' => 'required|integer',
            'student_details' => 'required'
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
            'student_id.required' => 'Please enter Student Number!',
            'student_id.exists:students,student_number' => 'Student Number does not exists',
            'amount.required' => 'Pay amount is required!',
            'student_details.required' => 'Indicate pay type!'
        ];
    }
}
