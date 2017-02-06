<?php

function loadPage ($smarty, $controllerName, $actionName = 'index', $db) 
{
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty, $db);
}

function createSmartyRsArray ($query) 
{
    if (!$query) { return false; }

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}

function indexSmartyAssign ($smarty, $db) 
{
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
    $smarty->assign('lastProducts', getLastProducts(16, $db));
}

function indexDisplay($smarty, $db) 
{
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('index' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}

function indexCatsSmartyAssign($categories, $productsByCat, $childCats, $smarty, $db) 
{
    $smarty->assign('pageTitle', 'Товары категории ' . $categories['name']);
    $smarty->assign('category', $categories);
    $smarty->assign('productsByCat', $productsByCat);
    $smarty->assign('childCats', $childCats);
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
}

function indexCatsDisplay($smarty, $db) 
{
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('category' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}

function indexProdsSmartyAssign($prodId, $smarty, $db)  
{
    $smarty->assign('itemInCart', 0);
    if (in_array($prodId, $_SESSION['cart'])) {
        $smarty->assign('itemInCart', 1);
    }
    $smarty->assign('pageTitle', '');
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
    $smarty->assign('product', getProductById($prodId, $db));
}

function indexProdsDisplay($smarty, $db) 
{
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('product' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}

function d ($value = null, $die = 1) 
{
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}












