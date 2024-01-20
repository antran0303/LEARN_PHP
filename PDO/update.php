<?php

require_once "connect.php";


$sql = "UPDATE hocsinh set fullname = :fullname, age = :age where id = :id";

$fullname = 'trang';
$age = 22;
$id = 4;


try{

    $statement = $conn -> prepare($sql);
    // $statement -> bindParam(":fullname", $fullname);
    // $statement -> bindParam(':age', $age);
    // $statement -> bindParam('id', $id);

    $data = [
        'fullname' => $fullname,
        'age' => $age,
        'id' => $id
    ];

    $statetus = $statement -> execute($data);

}
catch(Exception $exp){
    $exp -> getMessage(). '</br>';
    echo 'File: '. $exp -> getFile() . '</br>';
    echo 'Line: '. $exp -> getLine();
}




?>