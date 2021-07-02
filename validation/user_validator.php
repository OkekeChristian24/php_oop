<?php 

class UserValidator{

    private $data;
    private $errors = [];
    private static $fields = ['username', 'email', 'password', 'confirmpassword'];

    public function __construct($post_data){
        $this->data = $post_data;
    }

    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present!");
                return;
            }
        }

        $this->validateUsername();
        $this->validateEmail();
        $this->validatePassword();

        return $this->errors;
    }

    private function validateUsername(){
        $value = trim($this->data['username']);

        if(empty($value)){
            $this->addError("username", "Username CANNOT be empty!");
        }else{
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $value)){
                $this->addError('username', "Username must be 6-12 characters & alphanumeric!");
            }
        }
    }

    private function validateEmail(){
        $value = trim($this->data['email']);

        if(empty($value)){
            $this->addError("email", "Email CANNOT be empty");
        }else{
            if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                $this->addError('email', "Please enter a valid email");
            }
        }
    }

    private function validatePassword(){
        $pass1 = trim($this->data['password']);
        $pass2 = trim($this->data['confirmpassword']);

        if(empty($pass1)){
            $this->addError("password", "Please enter your password");
        }else{
            if(strlen($pass1) < 4){
                $this->addError("password", "Please enter a strong password");
            }else{
                if(empty($pass2)){
                    $this->addError("confirmpassword", "Please enter confirm password");
                }else{
                    if(strcmp($pass1, $pass2) != 0){
                        $this->addError("confirmpassword", "Does not match your password");
                    }
                }
            }
        }
        
    }

    private function addError($key, $errMsg){
        $this->errors[$key] = $errMsg;
    }
}

?>