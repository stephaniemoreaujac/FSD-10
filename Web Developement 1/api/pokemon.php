<?php

$poke_id = ($_GET['who'] ?? null);

if ($poke_id == null){
	die("Missing WHO in query string");
}
// build my curl url
$baseUrl = "https://pokeapi.co/api/v2/";

// fetch a specific pokemon
$endPointUrl = $baseUrl . "pokemon/" . $poke_id;

// initialize the curl request
$curl_handle = curl_init( $endPointUrl );

// setup options (POST DATA / HEADERS / REQUEST RETURN TYPE)
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);// - force return to be variable instead of output


// execute request
$pokemon_string = curl_exec($curl_handle);
//return a STRING

// convert the string into an array/object
$pokemon = json_decode($pokemon_string);

?>
<html lang="en">

<head><!-- source: https://codepen.io/Fluskys/pen/poNWYry -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pokemon</title>
	<link href="styles/pokemon.css" rel="stylesheet">
</head>

<body>
	<h1 id="Page-Title">Pokemon API fetch example</h1>

	<div class="container">

		<div class="pokemons-card" id="pokemons-card">
			<h5 id="pokemon-name"><?=$pokemon->name; ?></h5>
			<img src="<?=$pokemon->sprites->other->dream_world->front_default; ?>" width="100px">
			<div class="abilities" id="abilities">
				<p class="abilities-names">Abilities</p>
				<ul>
					<?php 
					for ($a=0; $a<sizeof($pokemon->abilities);$a++)
						echo "<li>{$pokemon->abilities[$a]->ability->name}</li>";
					?>
				</ul>
			</div>
			<div class="types" id="types">
				<p class="types-names">Types</p>
				<ul>
				<?php 
					for ($t=0; $t<sizeof($pokemon->types);$t++)
						echo "<li>{$pokemon->types[$t]->type->name}</li>";
					?>
				</ul>
			</div>
		</div>
		`
	</div>

</body>

</html>