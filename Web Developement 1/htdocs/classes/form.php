<?php
// Retrieve all the information from varaible
// var_dump($_SERVER);

// GET method = query string in the url
if ( $_SERVER['REQUEST_METHOD'] == "GET"){
  echo "--- GET method was used ---";
  echo "<pre>";
  print_r($_GET);
  echo "</pre>";
}
// PSOT method = form data in header
if ( $_SERVER['REQUEST_METHOD'] == "POST"){
  echo "--- POST method was used ---";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  // happy is not checked
  if (!array_key_exists('happy', $_POST)){
  // if (!array_key_exists('happy', $_POST) || $_POST['happy'] != "on"){
    // since it is a checkbox, if it exists =  it as checked
      echo "I'm sorry you did not enjoy the service <br>";
  }

  if ( array_key_exists('first_name', $_POST) && $_POST['first_name'] != ""){
    echo "Hello ". ucfirst($_POST['first_name']). " <br>";
  }
  
  // data sanitization - built in php
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  echo $email;

  echo "<br>";
  // data validation - built in php
  $isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
  if( $isEmailValid){
    echo "Email is valid <br>";
  } else{
    echo "Email is not valid <br>";
  }

  // validate that a variable (or array index) exists
  if (isset($_POST['foods'])){
    echo "You like the following foods: ";
    foreach($_POST['foods'] as $f){
      echo $f.", ";
    }
  }


}
// initialize variables;
// set default value to "" if POST key not found
$firstName = $_POST['first_name'] ?? "";

$lastName = $_POST['last_name'] ?? ""; // method 1

// method 2
if (isset($_POST['last_name']))
  $lastName = $_POST['last_name'];
else 
  $lastName = "";

// method 3
$lastName = isset($_POST['last_name']) ? $_POST['last_name'] : "" ;

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Fun with Forms</title>
</head>
<body>
	<h1>My Forms</h1>

  <form action="" method="POST">
    First Name : <input type="text" name="first_name" value="<?=$firstName; ?>" /><br />
    Last Name :  <input type="text" name="last_name" value="<?=$lastName;?>"  /><br />
    Email : <input type="text" name="email" /><br />
    Address : <textarea name="address"></textarea><br />
    Happy with the service? <input type="checkbox" name="happy" value="yes i am" /><br />
    Favorite Foods :
    <select name="foods[]" multiple >
      <option value="carrot">Carrots</option>
      <option value="cucumber">Cucumber</option>
      <option value="Apple">Apple</option>
      <option value="pear">Pear</option>
    </select><br />
    <br />
    <!-- checkbox with [] -->
    <!-- My Photo: <input type="file" name="photo" /> -->
    <br />
    <input type="hidden" name="primaryKey" value="password123!" />
    <input type="submit" name="btnSubmitted" />
    <input type="submit" name="btnOther" />
  </form>
</body>
</html>
