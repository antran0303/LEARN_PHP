<?php

require_once "connect.php";



$sql = "INSERT INTO hocsinh(fullname, age) VALUES(:fullname, :age)";

try{

    $statement = $conn -> prepare($sql);

    $fullname = 'trang';
    $age = '22';

    // $statement -> bindParam(':fullname', $fullname);
    // $statement -> bindParam(':age', $age);

    $data = [
        'fullname' => $fullname,
        'age' => $age
    ];

    $insert = $statement -> execute($data);

    var_dump($insert);

}
catch(Exception $exp){
    echo $exp -> getMessage(). '</br>';
    echo 'File: '. $exp -> getFile() . '</br>';
    echo 'Line: '. $exp -> getLine();
}

?>
