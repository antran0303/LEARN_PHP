<?php

const _HOST = "localhost";
const _DB = "antran_123";
const _USER = "root";
const _PASS = "";

try{

    if(class_exists("PDO")){

        $dsn = 'mysql:dbname='._DB.';host='._HOST;
        
        $conn = new PDO($dsn,_USER,_PASS);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        var_dump($conn);
    }

}
catch(Exception $exception){
    echo $exception -> getMessage(). '</br>'; 
    die();
}
?>