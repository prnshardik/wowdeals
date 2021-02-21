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
                    'bdate' => 'required',
                    'city' => 'required',
                    
                ];
            }else{
                return [
                    'name' => 'required',
                    'mobile_no' => 'required|unique:users',
                    'email' => 'required|unique:users',
                    'bdate' => 'required',
                    'city' => 'required',
                ];
            }
        }

        public function messages(){
            return [
                'name.required' => 'Please enter name',
                'mobile_no.required' => 'Please enter mobile_no',
                'mobile_no.unique' => 'This mobile number is already taken',
                'email.required' => 'Please enter email id',
                'email.unique' => 'This email is already taken',
                'bdate.required' => 'Please enter Birth Date',
                'city.required' => 'Please Select City',
            ];
        }
    }