<?php 

$currentNav = "";

/**
 * Ouptput the page not found
 */
function pageNotFound(){
	include "header.php";
	echo "Page not found";
	include "footer.php";
	die();
}

/**
 * Validate if array value exists and is empty
 *
 * @param [array] $array
 * @param [string] $key
 * @return bool
 */
function validateIsEmptyData($array, $key){

//if ( !array_key_exists('txtTitle', $_POST) || $_POST['txtTitle'] == ""){
	if (!array_key_exists($key, $array) || $array[$key] ==  ""){
		return true; 
	} else 
	return false;

}

?>