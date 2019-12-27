<?php

// Show all information, defaults to INFO_ALL
//phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.
//phpinfo(INFO_MODULES);

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "OK";

});

$app->run();

?>