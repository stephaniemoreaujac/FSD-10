<?php 

// this will cause an error if the cookie if not set
echo "Hello " . $_COOKIE['firstName'];

echo "<br><br>";
$firstName = $_COOKIE['firstName'] ?? "Unknown User";
echo "Hello " . $firstName;

echo "<br><br>";
echo "Last Name " . ($_COOKIE['lastName'] ?? "None");

// Session variables
session_start();
echo "<br><br>";
echo $_SESSION['myName']; // session must be started else ERROR
echo "<br>Session " . ($_SESSION['myName'] ?? "None")
?>