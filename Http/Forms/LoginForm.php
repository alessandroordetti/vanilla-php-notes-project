<?php 

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($email, $password){

        if(!Validator::email($email)){
            $this->errors['email'] = 'Please, provide a valid email.';
        }
        
        if(!Validator::string($password, 1, 20)){
            $this->errors['password'] = 'Please, provide a valid password.';
        }
        
        return empty($this->errors); // Ritorna un bool 
    }

    public function errors(){
         
        return $this->errors;
    }
}