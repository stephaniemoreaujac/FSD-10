<?php
$message = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	// echo "POST Request <br>";
	// echo "<pre>";

	// print_r($_POST);
	// print_r($_FILES);
	// check for file errors
	if ($_FILES['myFile']['error'] == 0){
		// no errors
		// echo "size: ". $_FILES['myFile']['size'] . "<br>";
		// echo "type: ". $_FILES['myFile']['type'] . "<br>";

		
		// assuming alwasy 3 character extention
		$ext = substr($_FILES['myFile']['name'], -3); 

		$newFileName = $_POST['txtName']. "." . $ext;
		// move file from temporary location
		$destination = "uploads/" . $newFileName;
		// move_uploaded_file (SOURCE FILE, DESTINATION )
		$isMoved = move_uploaded_file($_FILES['myFile']['tmp_name'], $destination );

		if ($isMoved)
			$message = "Your files has been successfully uploaded: <a href='{$destination}'>View File</a>";
		else
			$message = "File could not be uploaded";


	} else {
		$message = "File could not be uploaded";
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload</title>
</head>
<body>
	<h1>File Upload</h1>
	<?=$message; ?>
	<form method="POST" enctype="multipart/form-data">
<input type="text" name="txtName"><br>
		file to upload :
		<input type="file" name="myFile">
		<!-- use accept attribtue to limit file type in HTML -->

		<br>
		<input type="submit" value="upload File">
	</form>
	
</body>
</html>