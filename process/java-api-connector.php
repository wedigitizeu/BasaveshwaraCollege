<?php


    $data = NULL;
    $url = URL;
    $ch = curl_init(); 
    curl_setopt($ch,CURLOPT_URL,$url);   
    curl_setopt($ch, CURLOPT_POST, 1);                                                                                                                      
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',                                                                                
                    'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
 
    echo $result = curl_exec($ch);

    if($error = curl_error($ch)){
        
        $log = "----Error while connecting to JAVA API ----"." Name: ".$name." Email: "."$email"." Message: ".$message;
        errorLogger($log);

        echo $response  = json_encode(array(
            "status" => "400",
            "message" => "Error while submitting form,<br> Please try after some times."
        ));

        
    } 
   

 ?>