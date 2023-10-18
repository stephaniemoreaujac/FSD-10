<?php

require "dbConnect.php";

$errorMessages = "";
$txtTitle = "";
$txtBody = "";
$fileImage = "";
$txtCaption = "";
$selCategory = "";

// check the POST method
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	// form was submitted

	// validating the form
	if (validateIsEmptyData($_POST, 'txtTitle')) $errorMessages .= "Title is required <br>";
	else $txtTitle = $_POST['txtTitle'];

	if (validateIsEmptyData($_POST, 'txtBody')) $errorMessages .= "Body is required <br>";
	else $txtBody = $_POST['txtBody'];

	if (validateIsEmptyData($_POST, 'txtCaption')) $errorMessages .= "Caption is required <br>";
	else $txtCaption = $_POST['txtCaption'];

	if (validateIsEmptyData($_POST, 'selCategory')) $errorMessages .= "Cateogry is required <br>";
	else $selCategory = $_POST['selCategory'];
	
	// if error message is empty then save to db
	if ($errorMessages == ""){
		// save and upload the file (if applicable)
		if ($_FILES['fileImage']['error'] == 0){
			// file is found - save to server
			// TODO: validate extension or type (if needed)
			$sourceFile = $_FILES['fileImage']['tmp_name'];
			$destinationFile = "portfolio/" . $_FILES['fileImage']['name'];

			if (move_uploaded_file($sourceFile, $destinationFile)){
				// file has been moved
				$fileImage = $destinationFile;
			} else {
				// file has NOT been moved
			}
	
		} // end $FILE error

		// add to my database
		$sql = "INSERT INTO portfolio (title, caption, body, image, update_time, category_id) VALUES (:title, :caption, :body, :image, :utime, :cat_id);";
		$query = $db->prepare($sql);
		$data = [
			"title" => $txtTitle, 
			"caption" => $txtCaption,
			"body" => $txtBody,
			"image" => $fileImage,
			"cat_id" => $selCategory,
			"utime" => date("Y-m-d")
		];
		$query->execute($data);

		$itemId = $db->lastInsertId();
		
		// redirect user to the portfolio singel item page
		header("location: single.php?item={$itemId}");

	}
	// txtTitle
	// txtBody
	// fileImage // not rquired
	// txtCaption
	// selCategory

}


$pageTitle = "Add New Item";
$currentNav = "add";
include "includes/header.php"; ?>

<!-- line 71-106 of template_form.html -->
<div class="row">
	<form class="col-sm-6 col-sm-offset-3" method="POST" enctype="multipart/form-data">
	<p><?=$errorMessages ?></p>
		<div class="form-group">
			<label for="txtTitle" class="control-label">Title</label>
			<input id="txtTitle" name="txtTitle" type="text" required="required" class="form-control" value="<?=$txtTitle; ?>">
		</div>
		<div class="form-group">
			<label for="txtBody" class="control-label">Body</label>
			<textarea id="txtBody" name="txtBody" cols="40" rows="5" required="required" class="form-control"><?=$txtBody; ?></textarea>
		</div>
		<div class="form-group">
			<label for="fileImage" class="control-label">Image</label>
			<input id="fileImage" name="fileImage" type="file" class="form-control">
		</div>
		<div class="form-group">
			<label for="txtCaption" class="control-label">Caption</label>
			<input id="txtCaption" name="txtCaption" type="text" required="required" class="form-control" value="<?=$txtCaption; ?>">
		</div>
		<div class="form-group">
			<label for="selCategory" class="control-label">Category</label>
			<select id="selCategory" name="selCategory" required="required" class="select form-control">
				<option value="">-----</option>
				<option value="1">Java</option>
				<option value="2">HTML</option>
				<option value="3">PHP</option>
			</select>
		</div>
		<div class="form-group">
			<button name="btnSubtmi" type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>


</div>


<?php include "includes/footer.php"; ?>