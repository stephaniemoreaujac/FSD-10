<?php 

// will automatically load any library required from our composer
require "vendor/autoload.php";

use Monolog\Logger; // logger instance
use Monolog\Handler\StreamHandler; // controll saving to a file

// create a seperate logger for different purposes
$logger = new Logger("users");
// where/how to save my log data
$logger->pushHandler( new StreamHandler('allLogs/user.log') );
//, Logger::WARNING  ); // TODO: limit log levels!!

// start to log stuff
$logger->debug("This is a debug", ["id" => 2, "portfolio"=>3]);
$logger->info("This is a info");
// $logger->notice("This is a notice");
// $logger->warning("This is a warning");
// $logger->error("This is a error");
// $logger->critical("This is a critical");
// $logger->alert("This is a alert");
// $logger->emergency("This is a emergency"); 
echo "I'm done!!";