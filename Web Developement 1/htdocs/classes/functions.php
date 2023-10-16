<?php // functions

/**
 * Output the current year
 */
function showCurrentYear(){
//	echo date('Y'); // if returnCurrentYear does not exist
	echo returnCurrentYear();
}
//showCurrentYear();

/**
 * Return the current year
 *
 * @return integer the current year
 */
function returnCurrentYear(){
	return date('Y');
}
$cy = returnCurrentYear();
//echo $cy;


function sayHello($name="Bob"){
	if ($name == ""){
		echo "Hello Everybody";
	} else {
		echo "Hello {$name}";
	}
	echo "<Br>";
}
sayHello("Peter");
sayHello("John");
sayHello();

// optional value MUST be last
function addUpValues($cost, $stock=1){
	return ($cost * $stock);
}
function addUpValuesWithShipping($cost, $shipping, $stock=1){
	return ($cost * $stock) + $shipping;
}

// echo addUpValues(4.99);
// echo '<br>';
// echo addUpValues(10, 5);
// echo '<br>';
// echo addUpValuesWithShipping(4.99, 3.99);
// echo '<br>';
// echo addUpValuesWithShipping(10, 2.75, 5);
?>