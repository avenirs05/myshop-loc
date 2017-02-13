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


function d ($value = null, $die = 1) 
{
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}


function redirect($url) 
{
    if (! $url) { $url = '/'; }    
    header("Location: {$url}");
    exit;
}

