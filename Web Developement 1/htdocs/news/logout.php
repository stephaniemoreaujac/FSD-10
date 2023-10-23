<?php 

// remove any session variables
session_start(); // needed to access $_SESSION

$_SESSION = []; // emptying the session file on the server

session_destroy(); // delete the session file on the server


// remove cookies - must removed each individually
$cookie_expiration = time() - 1;
setcookie('cLoggedIn', "", $cookie_expiration);
setcookie('cRealName', "", $cookie_expiration);


// redirect to the home page
header("location: index.php");
die();

?>