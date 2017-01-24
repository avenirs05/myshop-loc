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

function indexCatSmartyAssign($category, $productsByCat, $childCats, $smarty, $db) 
{
    $smarty->assign('pageTitle', 'Товары категории ' . $category['name']);
    $smarty->assign('category', $category);
    $smarty->assign('productsByCat', $productsByCat);
    $smarty->assign('childCats', $childCats);
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
}

function indexCatDisplay($smarty, $db) 
{
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('category' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}

function d ($value = null, $die = 1) 
{
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}












