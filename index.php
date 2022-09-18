<?php 

/* 
 * ========================================================
 *                  CRICKETS Version 1.3.0
 *                    Dev by : @BaharDev
 * ========================================================
 * 
*/


$ruri = $_SERVER['REQUEST_URI'];
$host = explode(":", $_SERVER['HTTP_HOST']);
if ( isset( $host[0] ) AND $host[0] == "localhost" ){ 

    $ruri = $_SERVER['REQUEST_URI'];
    $uri = explode("/", $ruri);
    if ( isset($uri[1]) ) {
        $ampp = $uri[1]; 
        if ( !empty($ampp) ) {
            $_SERVER['DOCUMENT_ROOT'] .= "/" . $ampp;
        }
        unset($uri[1]);
    }
    $stringQ = "/";
    $rString = "";
    foreach ( $uri as $row ) {
        if ( empty($row) ) {
            $rString .= "/";
        }else {
            $rString .= "/" . $row;
        }
    }
    $rString = substr($rString, 1, strlen($rString));
    if ( empty($rString) ) {
        $rString = "/";
    }
    $_SERVER['REQUEST_URI'] = substr($rString, 0, ( strlen($rString) == 0 )?  strlen($rString) - 1 : strlen($rString) );
}
include "init.php";



// App Start
$app = new App();


