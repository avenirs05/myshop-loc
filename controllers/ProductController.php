<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';


function indexAction($smarty, $db) 
{
    $prodId = isset($_GET['id']) ? $_GET['id'] : null;    
    if ($prodId == null) { exit(); }

    indexProdsSmartyAssign($prodId, $smarty, $db);
    indexProdsDisplay($smarty, $db);
}
