<?php
/**
 * 
 * @param type $email
 * @param type $pwdMDS закодированный в MD5
 * @param type $name
 * @param type $phone
 * @param type $address
 */

function registerNewUser($email, $pwdMD5, $name, $phone, $address, $db)
{
    $email = htmlspecialchars(mysqli_real_escape_string($db, $email));
    $name = htmlspecialchars(mysqli_real_escape_string($db, $name));
    $phone = htmlspecialchars(mysqli_real_escape_string($db, $phone));
    $address = htmlspecialchars(mysqli_real_escape_string($db, $address));
    
    $sql = "INSERT INTO
            users (`email`, `pwd`, `name`, `phone`, `address`)
            VALUES('{$email}', '{$pwd}', '{$name}', '{$phone}', '{$address}')";
    
    $query = mysqli_query($sql);
    
    if ($query) {
        $sql = "SELECT * FROM users
                WHERE (`email` = `{$email}` and `pwd` = `{$pwdMD5}`)
                LIMIT 1";    
    
        $query = mysqli_query($sql);
        $res = createSmartyRsArray($rs);  

        if ($isset($res[0])) {
            $res['success'] = 1;
        } else {
            $res['success'] = 0;
        }
    } else {
        $res['success'] = 0;
    }
    
    return $res;
}

function checkRegisterParams ($email, $pwd1, $pwd2) 
{
    $res = null;
    
    if (! $email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }
    
    if (! $pwd1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }
    
    if (!$pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }
    
    if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }
    
    return $res;
}



















    