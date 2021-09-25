<?php


function successLogger($log) {

    $filePath = '../logger/successLog.txt';
    if(!file_exists($filePath)){
        file_put_contents($filePath,'');
    }
    
    $ip = $_SERVER['REMOTE_ADDR'];//GETTING CLIENT IP
    date_default_timezone_set("Asia/Calcutta");// SETTING INDIAN TIME ZONE
    $time = date('d-m-y h:iA',time());
    $contents = file_get_contents($filePath);
    $contents.= CONTENT_FROM;
    $contents.="$ip\t$time\t$log\r";
    file_put_contents($filePath,$contents);
    
    }
    
    function errorLogger($log) {
    
    $filePath = '../logger/errorLog.txt';
    if(!file_exists($filePath)){
        file_put_contents($filePath,'');
    }
    $ip = $_SERVER['REMOTE_ADDR'];//GETTING CLIENT IP
    date_default_timezone_set("Asia/Calcutta");// SETTING INDIAN TIME ZONE
    $time = date('d-m-y h:iA',time());
    $contents = file_get_contents($filePath);
    $contents.= CONTENT_FROM;
    $contents.="$ip\t$time\t$log\r";
    file_put_contents($filePath,$contents);
    
    }

?>