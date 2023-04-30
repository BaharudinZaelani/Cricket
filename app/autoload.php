<?php 

/*
 * Auto load class
 * 
*/
require './vendor/autoload.php';

// Load App
spl_autoload_register(function($class){
	$file = __DIR__ . '\\core\\' . $class . '.php';
	if (file_exists($file)) {
		require 'core/' . $class . '.php';
	}
});


// load Models
spl_autoload_register(function($class){
	$file = __DIR__ . '\\models\\' . $class . '.php';
	if (file_exists($file)) {
		require 'models/' . $class . '.php';
	}
});

// Load Logic
spl_autoload_register(function($class){
	$file = __DIR__ . '\\logic\\' . $class . '.php';
	if (file_exists($file)) {
		require 'logic/' . $class . '.php';
	}
});

include "Views.php";