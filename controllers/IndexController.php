<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function indexAction($smarty, $db) 
{ 
    indexSmartyAssign($smarty, $db);
    indexDisplay($smarty, $db);    
}

  



