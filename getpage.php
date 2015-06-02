<?php
/**
* Set error reporting to display all errors should there be any
*/
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

/**
* Make sure the 'url' parameter is present first
*/
if ($_GET['url']):
    $newURL = $_GET["url"];
    $newURL .= 'origin=' . rawurlencode($_GET["origin"]);
    $newURL .= '&destination=' . rawurlencode($_GET["destination"]);
    
    //echo '<!-- ' . $newURL . ' -->';
    
    echo file_get_contents($newURL);
endif;
?>
