<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';


function indexAction($smarty, $db) 
{
    $prodId = isset($_GET['id']) ? $_GET['id'] : null;    
    if ($prodId == null) { exit(); }
    
    $smarty->assign('itemInCart', 0);
    if (in_array($prodId, $_SESSION['cart'])) { 
        $smarty->assign('itemInCart', 1); 
    }
    $smarty->assign('pageTitle', '');
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
    $smarty->assign('product', getProductById($prodId, $db));
    
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('product' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}


