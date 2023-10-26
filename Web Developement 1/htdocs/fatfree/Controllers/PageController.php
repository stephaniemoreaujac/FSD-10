<?php

/**
 * Handle pages without database connections
 */
class PageController{

	function homepage($f3){
		/*
			$aboutPageURL = $f3->alias("aboutPage");

			echo "This is the homepage
			<br>
			<a href='aboutUs'>My about page</a>
			<br>
			<a href='{$aboutPageURL}'>My about page</a>
			";*/

		// create template instance to show visual to users
		$f3->set("pageTitle", "My Home Page");

		echo Template::instance()->render('home.html');

	}

	function about($f3){
		// echo "About Me.. Hello";
		$f3->set("pageTitle", "All About Me");
		echo Template::instance()->render('about.html');
	}

	function aboutPost(){
		echo "Post method used";
	}

	function userData($f3, $params){
		echo "User id: " . $f3->get("PARAMS.uid") . "<br>";
		echo "User id: " . $params['uid'];
	}


}