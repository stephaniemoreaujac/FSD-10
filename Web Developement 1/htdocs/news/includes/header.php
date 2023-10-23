<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="http://localhost:81/news/" > 
	<!-- sets the base url for all linked assets -->
	
	<title>Portfolio</title>
	<!-- old bootstrap because old template -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link href="css/styles.css" rel="stylesheet">

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<span class="glyphicon glyphicon-fire"></span>
					Portfolio
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="<?php if ($currentNav == "recent") echo "active"; ?>">
						<a href="index.php">Recent Work</a>
					</li>
					<!-- start of categories -->
					<?php foreach($allCategories as $cat_id => $cat_name){ ?>
						<li class="<?php if ($currentNav == "C".$cat_id) echo "active"; ?>">
							<!-- <a href="index.php?item=<?=$cat_id;?>"> -->
							<a href="category/<?=$cat_id; ?>">
								<?=$cat_name; ?>
							</a>
						</li>
					<?php } ?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if ($userIsLoggedIn){ ?>
						<li class="<?php if ($currentNav == "add") echo "active"; ?>">
							<a href="add.php">Add Item</a>
						</li>
						<li>
							<a href="logout.php">Logout</a>
						</li>
					<?php } else { ?>
						<li class="<?php if ($currentNav == "login") echo "active"; ?>">
							<a href="login.php">Login</a>
						</li>
					<?php } ?>
				</ul>
			</div>

		</div>

	</nav>

	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Portfolio
					<small><?=($pageTitle??""); ?></small>
				</h1>
			</div>
		</div>