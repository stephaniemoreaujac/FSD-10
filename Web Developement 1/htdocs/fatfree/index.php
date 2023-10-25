<?php
//TODO:  fix alias prefix

// will automatically load any library required from our composer
require "vendor/autoload.php";

// load framework
$f3 = Base::instance();

// framework to automatically load the classees within these folders
$f3->set('AUTOLOAD', 'Controllers/');

/* - used without controller folder
	// setup simple route
	$f3->route('GET /', function($f3){ 
		//$f3 as argument allows access to global $f3
		echo "Hello World!";
	});

	$f3->route('GET /about', function($f3){
		echo "About Me";
	});

	$f3->route('POST /about', function($f3){
		echo "About the post method";
	});

	$f3->route('GET /single/@singleid', function($f3, $p){
		echo "Single ". $f3->get('PARAMS.singleid') .'<br>';
		echo "parameter " . $p['singleid'] . '<br>';
	});

	$f3->route('GET /single/@singleid/@category', function($f3, $p){
		echo "Single ". $f3->get('PARAMS.singleid') .'<br>';
		echo "parameter " . $p['singleid'] . '<br>';
		echo $p['category'];
	});
*/
// routes using /Controller classes
$f3->route('GET /', 'Pages->homepage');
$f3->route('GET @aboutPage: /aboutSomebody', 'Pages->about');
$f3->route('POST /about', 'Pages->aboutPost');

$f3->route('GET /users/@uid', 'Pages->userData'); // not a great example


// start the framework
$f3->run();


?>