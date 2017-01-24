<?php

function getChildrenForCat ($catId, $db) 
{
    $sql = "SELECT * 
            FROM categories
            WHERE parent_id = $catId"; 
    $query = mysqli_query($db, $sql);
    
    return createSmartyRsArray($query); 
}

function getAllMainCatsWithChildren($db) 
{
    $sql = 'SELECT * 
            FROM categories
            WHERE parent_id = 0';    
    $query = mysqli_query($db, $sql);    
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $rsChildren = getChildrenForCat($row['id'], $db);
        if($rsChildren) {
            $row['children'] = $rsChildren;
        } 
        $smartyRs[] = $row;
    }    

    return $smartyRs;
}

function getCatById($catId, $db) 
{
    $catId = intval($catId);
    
    $sql = "SELECT * 
            FROM categories
            WHERE id = $catId";
    
    $query = mysqli_query($db, $sql);
    
    return mysqli_fetch_assoc($query);
}
