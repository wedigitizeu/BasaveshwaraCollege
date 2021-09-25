<?php 

// else if(!validateMobileNumber($mobile)){
//     $log = "----User entered mobile did not match regx ----";
//     errorLogger($log); 

//     echo $response  = json_encode(array(
//         "status" => "400",
//         "message" => MOBILE_ERROR_MSG
//     ));

// }


include_once("../config.php");
define("CONTENT_FROM","From Contact us form: " );
//Logger Function
include_once('./logger.php');

?>
<?php
//Form Validtion
include_once("./form-validator.php");

$name = $_POST['name'];
$email =  $_POST['email'];
$mobile =  $_POST['mobile'];

$message = $_POST['message'];
$source = "CAPFRONT_TECHNOLOGY | CONTACT_US_PAGE";

$log = "---- New User Filled contact  Form : "." Name: ".$name." Email: "."$email"." Message: ".$message."Mobile".$mobile;
successLogger($log);


if (isset($_POST['g-recaptcha-response'])) {

    
    $secretkey = GOOGLE_RECAPTCHA_SECRETE_KEY;
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $response = $_POST['g-recaptcha-response'];
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretkey . '&response=' .$response);
    $responseData = json_decode($verifyResponse);

    if ($responseData->success) {


        /* FORM VALIDATION STARTS */
        if(!validateName($name)){
            // All erro message are defined in config.php
            $log = "---- User entered name did not match regx ----";
            errorLogger($log);  
        
            echo $response  = json_encode(array(
                    "status" => "400",
                    "message" => NAME_ERROR_MSG
            ));
        
        } else if(!validateEmail($email)){
        
            $log = "---- User entered email did not match regx ----";
            errorLogger($log);   
        
            echo $response  = json_encode(array(
                    "status" => "400",
                    "message" => EMAIL_ERROR_MSG
            ));
        } else if(! validateMessage($message)){ //do not allow html content
            
            $log = "----User entered message did not match regx ----";
            errorLogger($log);  
        
            echo $response  = json_encode(array(
                    "status" => "400",
                    "message" => VALID_MESSAGE_ERROR_MSG
            ));
        }   else{
        
        
        
            /*API Request Start*/
           
            $contactArray = array('name' => $name, 'email' => $email,'mobileNo'=>$mobile,'message' => $message,'source'=>$source);
            $data_string = json_encode($contactArray);                                                                             
        
            
        
            //Java API Connector Starts
            include_once("./java-api-connector.php");
             //Java API Connector Ends
            /* API Request Ends */ 
            
            
        }
        /* FORM VALIDATION ENDS */      

    }else{

                echo $response  = json_encode(array(
                    "status" => "400",
                    "message" => CAPTCHA_VERIFICATION_FAILED
                ));
    }
     
}else{
    
        echo $response  = json_encode(array(
            "status" => "400",
            "message" => SUBMIT_CAPTCHA
        ));
}


?>