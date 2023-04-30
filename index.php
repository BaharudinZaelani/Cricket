<?php 

/* 
 * ========================================================
 *                  CRICKETS Version 1.3.0
 *                    Dev by : @BaharDev
 * ========================================================
 * 
*/
include "init.php";


$ruri = $_SERVER['REQUEST_URI'];
$host = explode(":", $_SERVER['HTTP_HOST']);

// if server run at xampp or ampp, whatever that is. ㄟ( ▔, ▔ )ㄏ
if ( isset( $host[0] ) AND $host[0] == "localhost" ){ 
    $ruri = $_SERVER['REQUEST_URI'];
    $uri = explode("/", $ruri);
    if ( isset($uri[1]) ) {
        $ampp = $uri[1];
        define("PROJECT", "/" . $ampp);
        define("PATH", PROJECT ); 
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
}else {
    define("PATH", URI ); 
    define("PROJECT", "");
}



// App Start
$app = new App();