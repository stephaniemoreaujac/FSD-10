<?php

include "dbConnect.php";

// user must be logged in
loginRequired($userIsLoggedIn);

// is there a value in my Get for item
if (!isset($_GET['item'])){
	pageNotFound();
}

$data = ['id'=>$_GET['item']];
// does the item exists in the database
$query = $db->prepare("SELECT * FROM portfolio WHERE portfolio_id = :id");
$query->execute($data);

$result = $query->fetch();
if (!$result){
	pageNotFound();
}

// delete if exists
$query = $db->prepare("DELETE FROM portfolio WHERE portfolio_id = :id");
$query->execute($data);

// remove the image if exist
if ($result['image'] != "")
	unlink ($result['image']);

// redirect to index (or tell user "entry removed")
$pageTitle = "Remove Item";
include "includes/header.php";
echo "<p>" . $result['title'] . " has been successfully removed" . "</p>";
include "includes/footer.php";

?>