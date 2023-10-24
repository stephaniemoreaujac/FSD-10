<?php

// will automatically load any library required from our composer
require "vendor/autoload.php";

DB::$user = "fsduser";
DB::$password = "myDBpw";
DB::$dbName = "fsd10_class";
DB::$port = "3304";

/*
$allCategories = DB::query("SELECT * FROM categories");

foreach ($allCategories as $row){
	echo "{$row['name']} <br>";
	$allPortfolio = DB::query("SELECT * FROM portfolio WHERE category_id=%i", $row['category_id']);
	foreach ($allPortfolio as $item){
		echo "-- {$item['title']} <br>";
	}
}
*/
/*
DB::insert("users", [
	"username" => "David",
	"real_name" => "Davidddddd",
	"password"=>password_hash("123", PASSWORD_DEFAULT)
]);*/

echo "<pre>"; // easier to read in html
$data = DB::query("SELECT name, category_id FROM categories");
print_r($data); // array

$data = DB::queryFirstRow("SELECT name, category_id FROM categories");
print_r($data); // array

$data = DB::queryFirstField("SELECT name, category_id FROM categories");
print_r($data); // string


list($name, $cat_id) = DB::queryFirstList("SELECT name, category_id FROM categories");
print_r($name); // string
print_r($cat_id); // int