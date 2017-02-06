<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function indexAction ($smarty, $db) 
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == null) { exit(); }    
    
    $childCats = null;
    $productsByCat = null;
    $categories = getCatById($catId, $db);  
    
      
    if ($categories['parent_id'] == 0) {
        $childCats = getChildrenForCat($catId, $db);
    } else {
        $productsByCat = getProductsByCat($catId, $db);
    }    
    
    indexCatsSmartyAssign($categories, $productsByCat, $childCats, $smarty, $db);
    indexCatsDisplay($smarty, $db); 
}

