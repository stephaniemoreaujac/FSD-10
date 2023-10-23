<?php
// echo password_hash("123", PASSWORD_DEFAULT); die();
// connect to databse
require 'dbConnect.php';

if ($userIsLoggedIn){
	header("location: index.php");
	die();
}

$errorMessages = "";
// no variables to repopulate form

if ($_SERVER['REQUEST_METHOD'] == "POST"){

	// validate errors
	if (validateIsEmptyData($_POST, 'txtLogin')) $errorMessages .= "Username is required <br>";
	
	if (validateIsEmptyData($_POST, 'txtPass')) $errorMessages .= "Password is required <br>";
	
	// if error message is empty then validate user and passwrod combination
	if ($errorMessages == ""){
		// fetch data
		$sql = "SELECT * FROM users WHERE username = :user";
		$query = $db->prepare($sql);
		$query->execute(["user"=> $_POST['txtLogin']]);
		$data = $query->fetch();
		
		if ($data){
			// username exist in the database
			
			if (password_verify($_POST['txtPass'], $data['password'])){
				// The username and password match

				// keep the user logged using session variables - make sure the session is started
				$_SESSION['loggedIn'] = true;
				$_SESSION['realName'] = $data['real_name'];

				// keep user logged in using cookies
				// $cookie_expiration = time() + (60*60*24*7) ;//  1 week
				// setcookie('cLoggedIn', true, $cookie_expiration);
				// setcookie('cRealName', $data['real_name'], $cookie_expiration);

				// redirect
				header("location: index.php");
				die();
			}
		}
		// username does not exits in the database OR password does not match
		$errorMessages = "Invalid Credentials";
		
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