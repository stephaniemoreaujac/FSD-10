<?php 
echo '<pre>'; // easier to read on browser

// listing of all available cookies
var_dump( $_COOKIE );

// create a cookie - accessible only on next page load
setcookie("firstName", "Bob");
// $_COOKIE['firstName'] => Bob

echo "New cookie value has been set!!

";

// if not expiry time, then cookie exists for browser windows life

// expiry to be in 5 mintues
time();// unix timestamp in seconds
$expiration = time() + (60 * 3); // 3 minutes
setcookie("lastName", "Moreau", $expiration);
echo "New Last Name for 3 minutes

";


echo $_COOKIE['lastName'];