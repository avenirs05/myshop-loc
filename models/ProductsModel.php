<?php

function getLastProducts($limit = null, $db) 
{
    $sql = "SELECT *
            FROM products
            ORDER BY id DESC";
    
    if ($limit) { $sql .= " LIMIT $limit"; }
    
    $query = mysqli_query($db, $sql);

    return createSmartyRsArray($query);
}

function getProductsByCat($catId, $db) 
{
    $catId = intval($catId);
    
    $sql = "SELECT * 
            FROM products
            WHERE category_id = $catId";    
    
    $query = mysqli_query($db, $sql);
    
    return createSmartyRsArray($query);
}

function getProductById($prodId, $db) 
{
    $prodId = intval($prodId);
    
    $sql = "SELECT * 
            FROM categories
            WHERE id = $prodId";
    
    $query = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($query);
}
