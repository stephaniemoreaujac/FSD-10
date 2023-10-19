<?php
// require the functions files
require "includes/functions.php";

// variable
$dbType = "mysql"; // type of database to connect to
$dbServer = "localhost"; // host name of my server
$dbName = "fsd10_class"; // name of my database
$dbPort = "3304"; // port for database server (check MAMP)
$dbCharset = "utf8"; // charset encoding for database
$dbUsername = "fsduser"; // user with access to db
$dbPassword = "myDBpw"; // $dbUsername password

// connection string (data source name)
$dbDSN = "{$dbType}:host={$dbServer};dbname={$dbName};port={$dbPort};charset={$dbCharset}";

// open database connection
$db = new PDO($dbDSN, $dbUsername, $dbPassword);

// $allCategories contains all the categories from the DB
$sql = "SELECT category_id, name FROM categories ORDER BY name ASC";
$query = $db->query($sql);
$allCategories = $query->fetchAll(PDO::FETCH_KEY_PAIR);
// PDO::FETCH_KEY_PAIR changes the way the results are returned

/*
// write my sql statement
$sql = "SELECT * FROM portfolio";

// setup the query
$query = $db->query($sql);
$queryWhile = $db->query($sql);

// $results = $query->fetch(); // retrieve next SINGLE row
$results = $query->fetchAll(); // retrieve ALL rows


echo "<pre>";
// print_r($results);

for ($x = 0; $x<sizeof($results); $x++ )
	echo $results[$x]['title'].'<br>';

foreach ($results as $row)
	echo $row['title'].'<br>';

// must use the query results - do not fetch before
while($row = $queryWhile->fetch())
	echo $row['title'].'<br>';


// no rows found
$sql = "SELECT * FROM portfolio WHERE 1=2";

// setup the query
$queryEmpty = $db->query($sql);
$resultsEmpty = $queryEmpty->fetchAll();

if (!$resultsEmpty){
	echo "No records were found";
}

// place holder preceeded by : to replace with given value
$category_id = 2;
$sql = "SELECT * FROM portfolio WHERE category_id = :catid";
$queryVariable = $db->prepare($sql);
$queryVariable->execute(['catid' => $category_id]);

$resultsVariable = $queryVariable->fetch();
print_r($resultsVariable);
*/