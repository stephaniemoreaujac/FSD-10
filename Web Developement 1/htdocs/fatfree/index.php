<?php
//TODO:  fix alias prefix

// will automatically load any library required from our composer
require "vendor/autoload.php";

// load framework
$f3 = Base::instance();

// framework to automatically load the classees within these folders
$f3->set('AUTOLOAD', 'Controllers/|Models/');

// framework to automatically load templates(view) from here
$f3->set('UI', 'Views/');


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

	});
*/
// routes using /Controller classes
$f3->route('GET @home: /', 'PageController->homepage');
$f3->route('GET @aboutPage: /aboutSomebody', 'PageController->about');
$f3->route('POST /about', 'PageController->aboutPost');

// categories CRUD
$f3->route('GET @catRead: /listing', 'CategoryController->listing');

$f3->route('GET @catUpdate: /update/@cat', 'CategoryController->update');
$f3->route('POST @catUpdate: /update/@cat', 'CategoryController->updateSave');

$f3->route('GET @catCreate: /add', 'CategoryController->add');
$f3->route('POST @catCreate: /add', 'CategoryController->addSave');

$f3->route('GET @catDelete: /delete/@cat', 'CategoryController->delete'); 
// we should implement a deletion validation and POST to actually delete

// start the framework
$f3->run();


?>