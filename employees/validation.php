<?php 
    class Validate{
        private $message;
        private $minimum = 1;
        private $maximum = 255;
        private $postcode = "/[a-z][0-9][a-z][- ]?[0-9][a-z][0-9]$/i";
        
        //validate a generic text field
        public function text($form){
            if(empty($form)){
                $this->message = "Required field&#42;";
            }else if(strlen($form) < $this->minimum){
                $this->message = "Too short.";
            }else if(strlen($form) > $this->maximum){
                $this->message = "Too long.";
            }else{
                $this->message = "";
            }
            return $this->message;
        }
        
        //validate email address
        public function email($form){
            if(empty($form)){
            $this->message = "Required field&#42;";
            }else if(filter_var($form, FILTER_VALIDATE_EMAIL) === false){
                $this->message = "Invalid email address";
            }else{
                $this->message = "";
            }
            return $this->message;
        }
        
        //validate postcode
        public function postcode($form){
            if(empty($form)){
            $this->message = "Required field&#42;";
            }else if(!preg_match($this->postcode, $form)){
                $this->message = "Invalid postcode";
            }else{
                $this->message = "";
            }
            return $this->message;
        }

        //validate user password
        public function password($form){
            $uppercase = preg_match('@[A-Z]@', $form);
            $lowercase = preg_match('@[a-z]@', $form);
            $number = preg_match('@[0-9]@', $form);

            //check if password matches all conditions
            if(empty($form)){
                $this->message = "Please enter a password";
            }else if(!$uppercase || !$lowercase || !$number || strlen($form) < 8){
                $this->message = "Password must be atleast 8 characters a lower and uppercase letter and number.";
            }else{
                $this->message = "";
            }
            return $this->message;
        }

        //validate a dropdown menu
        public function dropDownList($form){
            if(empty($form)){
                $this->message = "Required field";
            }else if($form = "0"){
                $this->message = "Required field";
            }else{
                $this->message = "";
            }
            return $this->message;
        }
        
    }
?>