<?php // opening php tag
/*
$name = "Steph";

// conditional statements
if ( $name == ""){
	$name = "Everybody";
}else if ($name <> $name){
	$name = "Someone";
} else{
	// something else can happen here
}

echo "Hello " . $name;
echo "<br>";
// ternary
echo "Hello ";
echo ($name=="") ? "Everybody" : $name;

//switch
echo "<br>";
$day = "Thursday";

switch ($day){
	case "Monday" : 
		echo "First day of the week!";
		break;
	case "Tuesday" :
		echo "Early Midweek";
	case "Thursday" :
		echo "End Midweek";
		break;
	case "Friday" :
		echo "Last day of the week";
		break;
	default:
		echo "The weekend";
}
 */
// LOOPS 
$maxCount = 10;
$i = 0;

//while
while ($i++ < $maxCount){
	echo "{$i} ...";
}
echo "end of while<br>";
//do while
do{
	echo "{$i} ...";
} while($i++ < $maxCount);
echo "end of do while<br>";

//for
for($x = 0; $x < $maxCount; $x++){
	echo "{$x}...";
}
echo "end of for loop<br>";
$arrC = array("Steve", "USA", "Florida");
for ($x=0; $x < sizeof($arrC); $x++){
	echo "index {$x} has value " . $arrC[$x] . "<br>";
}
echo "end of for loop <br>";

//foreach
$arrB = [
	"name" => "Bob",
	"country" => "England",
	"city" => "London"
];
foreach ($arrB as $key => $value){
	echo "{$key} has the value {$value} <br>";
}
echo "end of foreach <br>";
// foreach without needing key from array
foreach ($arrC as $valueInArray){
	echo "the value is {$valueInArray} <br>";
}
echo "end of foreach <br>";
/* closing php tag */ ?>