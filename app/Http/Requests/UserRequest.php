<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class UserRequest extends FormRequest{
        public function authorize(){
            return true;
        }

        public function rules(){
            if($this->method() == 'PATCH'){
                return [
                    'name' => 'required',
                    'mobile_no' => 'required|unique:users,mobile_no,'.$this->id,
                    'email' => 'required|unique:users,email,'.$this->id,
                    'birth_date' => 'required',
                    'city_id' => 'required'
                ];
            }else{
                return [
                    'name' => 'required',
                    'mobile_no' => 'required|unique:users',
                    'email' => 'required|unique:users',
                    'birth_date' => 'required',
                    'city_id' => 'required'
                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please enter name',
                'mobile_no.required' => 'Please enter mobile no',
                'mobile_no.unique' => 'This mobile number is already taken',
                'email.required' => 'Please enter email id',
                'email.unique' => 'This email is already taken',
                'birth_date.required' => 'Please enter birth date',
                'city_id.required' => 'Please select city'
            ];
        }
    }
