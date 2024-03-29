<?php 
/* 
 * APP CONFIG
 * Where basic property your Application here .
 * 
*/
define("APP_NAME", htmlspecialchars("Cricket")); // This a app name for your project
define("SHOW_ERROR", true); // If you didn't want showing error, set this to false, if your project was released

define("SERVER", "127.0.0.1:8081"); // local server url path your project run
define("URI", "http://" . SERVER ); 

/*
 * This setup database .... yess.
 * Only MYSQL that can be used
 * 
 * if you want to use another method
 * don't use this feature
 * please use it with curl or API
 * or JS librarys
 * 
*/
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB_NAME", "");

/*
 * set the value to true if your application using database
 * but your application not using database , you know what value needs to be set? ¯\_(ツ)_/¯
*/
define("USING_DB", false);