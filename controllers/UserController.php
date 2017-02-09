<?php

include_once 'models/CategoriesModel.php';
//include_once 'models/OrdersModel.php';
include_once 'models/UsersModel.php';

/**
 * AJAX регистрация пользователя
 * Инициализация сессионной переменной ($_SESSION['user'])
 * 
 * @return json массив данных нового пользователя
 */

function registerAction () 
{
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);
    
    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;
    
    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name = trim($name);
    
    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);  
}





