<?php

require_once "connect.php";

$sql = "DELETE FROM hocsinh WHERE id = ?";

$id = 5;

try{

    $statement = $conn -> prepare($sql);

    $data = [$id];

    $status = $statement -> execute($data);

}
catch(Exception $exp){
    $exp -> getMessage(). '</br>';
    echo 'File: '. $exp -> getFile() . '</br>';
    echo 'Line: '. $exp -> getLine();
}

?>