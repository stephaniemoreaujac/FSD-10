<?php 

// to use a session variable MUST START A SESSION
session_start();

$_SESSION['myName'] = "Stephanie";

echo $_SESSION['myName'];

// remove the session file from server
session_destroy();