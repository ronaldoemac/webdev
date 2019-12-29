<?php

// Show all information, defaults to INFO_ALL
//phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.
//phpinfo(INFO_MODULES);

require_once("vendor/autoload.php");
use \Slim\Slim;
use \Rcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();
	
	$page->setTpl("index");

});

$app->run();

?>