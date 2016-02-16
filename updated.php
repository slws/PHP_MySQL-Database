<?
// load configuration file 
require_once('error_handler.php'); 
require_once('config.php'); 
// connect to the database 
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// the SQL query to execute 
$query="UPDATE contacts SET first='$ud_first', last='$ud_last', phone='$ud_phone', mobile='$ud_mobile', fax='$ud_fax', email='$ud_email', web='$ud_web' WHERE id='$ud_id'";
$result = $mysqli->query($query);
echo "Record Updated";
// close the input stream 
$result->close();
// close the database connection 
mysql_close();
?>
