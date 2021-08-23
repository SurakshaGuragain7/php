<?php
    function returnString(){
        if(!empty($_POST["password"]) ) {
            $password = test_input($_POST["password"]);
            if (strlen($_POST["password"]) <= 8 || strlen($_POST["password"]) >= 15) {
                if(!preg_match("#[0-9]+#",$password) && !preg_match("#[A-Z]+#",$password) && !preg_match("#[a-z]+#",$password) && !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
                    return 1;
                } 
            }
            else{
                return 0;
            }
        }
    }
?>