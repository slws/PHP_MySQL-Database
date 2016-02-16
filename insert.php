<?
// load configuration file 
require_once('error_handler.php'); 
require_once('config.php'); 
// connect to the database 
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// the SQL query to execute 
$query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
// execute the query 
$result = $mysqli->query($query);
// close the input stream 
$result->close(); 
// close the database connection 
$mysqli->close(); 
?> 
