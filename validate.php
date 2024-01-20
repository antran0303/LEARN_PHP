

<?php

    if(!empty($_POST)){

        $errors = [];
        if(empty($_POST['fullname'])){
            $errors ['fullname'] ['required'] = 'Phải nhập họ tên';
        }
        else{
            if(strlen($_POST['fullname']) < 5){
                $errors['fullname']['min_length'] = "Ten phai nhieu hon 5 ky tu";
            }
        }

        if(empty($_POST['email'])){
            $errors['email']['required'] = "Phai nhap email";
        }
        else{
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email']['validate'] = "email khong dung dinh dang";
            }
        }

    }
?>







<form method="post" action="">

    <p> Họ tên:
        <input type="text" name="fullname" placeholder="Họ tên">
        <?php echo !empty($errors['fullname']['required']) ? '<p style="color:red;">'.$errors['fullname']['required']. '</p>' : ''?>
        <?php echo !empty($errors['fullname']['min_length']) ? '<p style="color:red;">'.$errors['fullname']['min_length'] . '</p>': ''?>
    </p>

    <p> Email:
        <input type="text" name="email" placeholder="Email">
        <?php echo !empty($errors['email']['required'])? '<p style="color:red;">'.$errors['email']['required']. '</p>' : ''?>
        <?php echo !empty($errors['email']['validate']) ?  '<p style="color:red;">'.$errors['email']['validate'] . '</p>' : ''?>
    </p>

    <button type="submit"> Xác nhận </button>
</form>