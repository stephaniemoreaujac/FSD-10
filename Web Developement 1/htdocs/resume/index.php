<?php
	//usually one of the first things, fatal if file not found
	require 'filename.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Resume</title>
</head>
<body>

<h1>This is the PHP Resume</h1>
<?php include "header.php"; ?>
<p>This is my page details</p>
<?php include "doesNotExists.php"; ?>
<p>If the file is not found using the <strong>include</strong>, it still allows your page to execute the remaining code</p>
<?php require "doesNotExists.php"; ?>
<p>You will not see this on your browser... using <strong>require</strong>, if a file is not found, your code suffers a fatal error and can no longer execute the remaining code</p>
<?php require "footer.php"; ?>
</body>
</html>