<?php 
// variables
$currentNav = "";


/**
 * Ouptput the page not found
 */
function pageNotFound(){
	global $allCategories, $userIsLoggedIn; 
	// gives access to $allCategories to prevent variable not found error
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

/**
 * Redirect if the user is not logged in
 *
 * @param [boolean] $loginFlag
 */
function loginRequired($loginFlag){
	// default value false if $loginFlag not found
	$loginFlag = $loginFlag ?? false;
	if ($loginFlag == false){
		header("location: login.php");
		die();
	}
}


?>