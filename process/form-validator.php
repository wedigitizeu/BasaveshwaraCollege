<?php

function validateName($name){
    if (!preg_match("/^[a-zA-Z ]{3,25}$/",$name)) {
        return false;
     }

     return true;
}

function validateEmail($email){

    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    
    return false;
}
function validateMobileNumber($mobile){

    if (!preg_match("/^[0-9]{10}$/",$mobile)) {
      
        return false;
     }

     return true;
}

function validateSubject($subject){
    if (!preg_match("/^[a-zA-Z 0-9 ,.?()!;#@\[\]]{3,50}$/",$subject)) {
        return false;
     }

     return true;
}


function validateMessage($message) {
   
    if (!preg_match("/^[a-zA-Z 0-9 ,.?()!;#@\[\]]{15,1000}$/",$message)) {
        return false;
     }
     
     return true;
}

?>