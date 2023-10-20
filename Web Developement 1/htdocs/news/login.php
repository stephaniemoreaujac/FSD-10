<?php
// echo password_hash("123", PASSWORD_DEFAULT); die();
// connect to databse
require 'dbConnect.php';

$errorMessages = "";
// no variables to repopulate form

if ($_SERVER['REQUEST_METHOD'] == "POST"){

	// validate errors
	if (validateIsEmptyData($_POST, 'txtLogin')) $errorMessages .= "Username is required <br>";
	
	if (validateIsEmptyData($_POST, 'txtPass')) $errorMessages .= "Password is required <br>";
	
	// if error message is empty then validate user and passwrod combination
	if ($errorMessages == ""){
		// fetch data
		
			// username exist in the database
			
				// The username and password match
				

				// keep the user logged in

				// redirect
				
		// username does not exits inthe database OR password does not match
		
	}

}

$pageTitle = "Login";
include "includes/header.php";
?>

<div class="row">
	<form class="col-sm-6 col-sm-offset-3" action="login.php" method="post">
		<p><?=$errorMessages; ?></p>
		<div class="form-group">
			<label for="txtLogin" class="control-label">Username</label>
			<input id="txtLogin" name="txtLogin" type="text" required="required" class="form-control">
		</div>
		<div class="form-group">
			<label for="txtPass" class="control-label">Password</label>
			<input id="txtPass" name="txtPass" type="password" required="required" class="form-control">
		</div>
		<div class="form-group">
			<button name="btnSubtmi" type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>

</div>

<?php include "includes/footer.php"; ?>