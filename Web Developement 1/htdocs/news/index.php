<?php
// connect to databse
require 'dbConnect.php';

// fetch all the portfolio itmes
$sql = "SELECT * FROM portfolio";
$query = $db->query($sql);

// show items below
$currentNav = "recent";
include "includes/header.php";
?>

<div class="row">

<!-- individual item START-->
<?php while($row = $query->fetch()){
	$link = "single.php?item=" . $row['portfolio_id'];
	?>
	<div class="col-md-6 portfolio-item">
		<?php if ($row['image'] != ""){ ?>
			<!-- check if image exists (else dummy photo ?) -->
			<a href="<?=$link; ?>">
				<img class="img-responsive" src="<?=$row['image'];?>" alt>
			</a>
		<?php } //end if ?>
		<h3>
			<a href="<?=$link; ?>"><?=$row['title']; ?></a>
			<span class="small"> <?=date('F j, Y', strtotime($row['update_time'])); ?></span>
		</h3>
		<p><?=$row['caption']; ?></p>
	</div>
<?php } // end while ?>
<!-- individual item END-->

</div>


<?php include "includes/footer.php"; ?>