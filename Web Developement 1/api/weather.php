<?php 

// build my curl url
$baseUrl = "http://api.weatherapi.com/v1/";

// current forecast
$endPointUrl = $baseUrl . "current.json?";

$endPointUrl .= "key=d601d333317f4a5f97f31011233010" . "&";
$endPointUrl .= "q=" .( $_GET['city'] ?? "Montreal" ) . "&";


// initialize the curl request
$curl_handle = curl_init( $endPointUrl );

// setup options (POST DATA / HEADERS / REQUEST RETURN TYPE)
// - force the return as a varible instead of ouput
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
// - POST DATA = CURLOPT_POSTFIELDS

// execute our request
$results = curl_exec($curl_handle);
//return a STRING

// convert the string into an array/object
$r = json_decode($results);

// print_r(["hello"=>"world", "Good"=>"Bye"]);
// print_r($r);
// 

?><html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Weather</title>
    <link href="styles/weather.css" rel="stylesheet"><!-- template source: https://codepen.io/_Sabine/pen/QzzBve-->
</head>
<body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<div class="frame">
	<div class="location"><?=$r->location->name; ?></div>
  <div class="front">
		<div>
			<div class="condition">
				<img src="<?=$r->current->condition->icon; ?>">
			</div>
			<div class="temperature">
				<?=$r->current->temp_c; ?>&deg;
			</div>
			<div>
				<div class="info">
					<i class="fas fa-wind"></i> 
					<?=$r->current->wind_dir; ?> <?=$r->current->wind_kph; ?> km/h <br> 
					<i class="fas fa-tint"></i> <?=$r->current->humidity; ?>%
				</div>

			</div>
		</div>

	</div>

</div>


</body>
</html>