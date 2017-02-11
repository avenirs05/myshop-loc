<?php
/**
 * 
 * @param type $email
 * @param type $pwdMDS пароль закодированный в MD5
 * @param type $name
 * @param type $phone
 * @param type $address
 * @return array массив данных нового пользователя
 */

function registerNewUser($email, $pwdMD5, $name, $phone, $address, $db)
{
    $email = htmlspecialchars($email);
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $address = htmlspecialchars($address);
    
    $sql = "INSERT INTO
            users (`email`, `pwd`, `name`, `phone`, `address`)
            VALUES('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$address}')";
    
    $res = mysqli_query($db, $sql);
    if ($res) {
        $sql = "SELECT * FROM users
                WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}')
                LIMIT 1";    
    
        $res = mysqli_query($db, $sql);
        $res = createSmartyRsArray($res);  

        if (isset($res[0])) {
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
    
    if (! $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }
    
    if ($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }
    
    return $res;
}

function checkUserEmail($email, $db) 
{
    $sql = "SELECT id FROM users WHERE email = '{$email}'";
    
    $query = mysqli_query($db, $sql);
    $res = createSmartyRsArray($query);
    
    return $res;
}



















    