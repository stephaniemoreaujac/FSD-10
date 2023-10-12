<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Class 1</title>
</head>
<body>
	<?php $hello = "hello World";
	echo "<h3>Hello World</h3>"; ?>
	<h3><?php echo $hello; ?></h3>
	<h3><?=" $hello" ?></h3> <!-- shorthand echo -->
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iste aut, voluptate accusantium aliquid vitae voluptatum! Quasi nobis adipisci numquam sunt. Dolorum, eum soluta non nulla deleniti eveniet veritatis fuga.</p>
	<?php // opening php tag
	 
	echo "PHP<br>";

	$myString = "Steph"; // string
	$myNumber = 33; // number
	$myFloat = 33.2; // float/double

	// no set datatype = loosy
	$myNumber = 'three'; // reassing a new value

	$myBool = true; // boolean
	
	$arrA = array(
		"name" => "Steph",
		"country" => "Canada",
		"province" => "Quebec"
	);

	$arrB = [
		"name" => "Bob",
		"country" => "England",
		"city" => "London"
	];
	
	echo "My name is ";
	echo $arrA["name"];
	
	// string concatenation
	$myString =  $arrA["province"] . ", " . $arrA["country"];
	echo " I live in " . $myString;

	$arrC = array("Steve", "USA", "Florida");
	$arrD = array("Jack", "Norway", "Oslo");
	

	echo "<br>";
	echo $arrC; // display word "Array" on screen
	echo "<br>";
	// easier to read print_r
	echo "<pre>";
	print_r($arrC);
	echo "</pre>";

	print_r($myString);

	// manipulate array 
	$arrD[0] = "Arthur";	// change value
	$arrD[4] = "76"; // add new value (if it does not exist) - WHAT ABOUT 3!!!
	$arrD[] = "Married"; // indexed array should add value with empty []
	print_r($arrD);

	$arrA["name"] = "Adele"; // change value
	$arrA["age"] = "12"; // add new value
	$arrA[] = "Single";

	echo "<pre>";
	print_r($arrA);
	echo "</pre>";
	
	
	$arthurGrades = ["French"=>60, "English"=>60];

	$arrStudents = [
		"Steph" => [
				"Math" => 80,
				"Web" => 99,
				"Design" => 80
		],
		"Bob" => array(
				"Geo" => 95,
				"Math" => 99
		),
		"Arthur" => $arthurGrades
	];

	echo "<pre>";
	print_r($arrStudents);
	echo "</pre>";

	echo $arrStudents["Steph"]["Math"];

	$arrSteph = $arrStudents["Steph"];
	$arrMath = $arrSteph["Math"];
	
	echo "<pre>";
	print_r($arrSteph);
	echo "</pre>";


// Arithmetic Operators

$price = 10.55;
$items = 3;

$subtotal = $price * $items;
$tax = ($subtotal / 100) * 14;
$total = $subtotal + $tax;
// $total = ( $price * $items ) + ( ( ( $price * $items ) / 100 ) * 14 );
// $total = $subtotal + ( ( $subtotal / 100) * 14);

echo $total .'<br>';

echo 8 % 3 .'<br>'; // modulos
echo ++$total .'<br>';
echo $total++ .'<br>';

$myString = "Steph" . " " .  "Moreau"; // concatenate
$myString .= ", Teacher";	// append

$myString = "Your total amount is $total";

echo $myString;

// 1= and <> both mean not equal to

if (1 == 1 || 2 == 2){
	echo "<br>";
	echo "this is true";
} else if (1 == 2) {
	echo "<br>";
	echo "this is not true!!";
} else {
	echo "somethign went wrong";
}

// all information about your php installation
echo phpinfo();

/* closing php tag */ ?>
</body>
</html>