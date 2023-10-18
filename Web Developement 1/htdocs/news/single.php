<?php
// connect to the database
require "dbConnect.php";

// check that GET has an item
if (!isset($_GET['item'])) {
	// the GET does NOT have a key named item
	pageNotFound();
}

// there is a $_GET['item'] that exists
$sql = "SELECT * FROM portfolio WHERE portfolio_id = :id";
$query = $db->prepare($sql);
$query->execute(['id' => $_GET['item']]);

$result = $query->fetch(); // fetch single row from db
if (!$result){ // nothing found in the database
	pageNotFound();
}

$pageTitle = $result['title'];

include "includes/header.php";
?>

<div class="row">
	<div class="col-12 portfolio-item">
		<div class="row">
			<?php if ($result['image'] != "") { ?>
				<div class="col-sm-8">
					<img class="img-responsive" src="<?=$result['image'];?>" alt>
				</div>
			<?php } ?>
			<div class="col-sm 4">
				<h1><?= $result['title']; ?></h1>
				<span class="small"><?= date('F j, Y', strtotime($result['update_time'])); ?></span><br>
				<p><?=nl2br($result['body']); ?></p>
			</div>
		</div>

	</div>
</div>




<?php include "includes/footer.php"; ?>