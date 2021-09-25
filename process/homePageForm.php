<?php
include_once("../config.php");
define("CONTENT_FROM","From Home Page Contact Form :");
include_once("./logger.php");
?>


<?php
include_once("./form-validator.php");

$name = $_POST['name'];
$email =  $_POST['email'];
$message = $_POST['message'];
$source = "BASAVESHWARA B.ED COLLEGE | CONTACT_US_PAGE";




$log = "---- New User Filled Form in home page  : "." Name: ".$name." Email: "."$email"." Message: ".$message;
successLogger($log);


if(!validateName($name)){

    $log = "---- User name did not match with regx ----";
    errorLogger($log);  

    echo $response  = json_encode(array(
            "code" => "400",
            "message" => NAME_ERROR_MSG
    ));

} else if(!validateEmail($email)){

    $log = "---- User email did not match with regx ----";
    errorLogger($log);  

    echo $response  = json_encode(array(
            "code" => "400",
            "message" => EMAIL_ERROR_MSG
    ));
} else if(! validateMessage($message)){ //do not allow html content
    
        $log = "---- User message did not match with regx ----";
        errorLogger($log);  

        echo $response  = json_encode(array(
                "code" => "400",
                "message" => VALID_MESSAGE_ERROR_MSG
        ));
} else{


    /*API Request Start*/
   


    $contactArray = array('name' => $name, 'email' => $email, 'message' => $message,'source'=>$source);
    $data_string = json_encode($contactArray);

    $data = NULL;
    $url ='https://samruddhi-lucky-draw.herokuapp.com/lf_service/data';  
    
    //Java API Connector
    include_once("./java-api-connector.php");

    /* API Request Ends */ 

    


    
   
}

?>