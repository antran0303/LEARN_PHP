<?php

    if(!empty($_SERVER['REQUEST_METHOD'])){
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
    }

    $result = move_uploaded_file($_FILES['an_upload']['tmp_name'], 'C:\xampp\htdocs\learn_php\upload_files\uploads'. $_FILES['an_upload']['name']);
?>