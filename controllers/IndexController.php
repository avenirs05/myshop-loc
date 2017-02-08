<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function indexAction($smarty, $db) 
{ 
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
    $smarty->assign('lastProducts', getLastProducts(16, $db));
    
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('index' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}


