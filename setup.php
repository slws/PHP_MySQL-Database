<?
// load configuration file 
require_once('error_handler.php'); 
require_once('config.php'); 
// connect to the database 
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// the SQL query to execute 
$query="CREATE TABLE contacts (id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL,fax varchar(20) NOT NULL,email varchar(30) NOT NULL,web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
// execute the query 
$result = $mysqli->query($query);
// close the input stream 
$result->close(); 
// close the database connection 
$mysqli->close(); 
echo "Database created";
?>
