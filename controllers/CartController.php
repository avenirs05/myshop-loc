<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function addToCartAction($db) 
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (! $itemId) { return false; }
    
    $resData = array();
    if ((isset($_SESSION['cart'])) && 
       (array_search($itemId, $_SESSION['cart']) === false)) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
        
    echo json_encode($resData);
}

function removeFromCartAction($db) 
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (! $itemId) { return false; }
    
    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);        
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    
    echo json_encode($resData);      
}

function indexAction ($smarty, $db) 
{
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    
    $products = getProductsFromArray($itemsIds, $db);
    
    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
    $smarty->assign('products', $products);
    
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('cart' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}

