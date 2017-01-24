<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function indexAction ($smarty, $db) 
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == null) { exit(); }    
    
    $childCats = null;
    $productsByCat = null;
    $category = getCatById($catId, $db);        
    
    if ($category['parent_id'] == 0) {
        $childCats = getChildrenForCat($catId, $db);
    } else {
        $productsByCat = getProductsByCat($catId, $db);
    }    
    
    indexCatSmartyAssign($category, $productsByCat, $childCats, $smarty, $db);
    indexCatDisplay($smarty, $db); 
}

