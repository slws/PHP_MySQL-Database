<?
// load configuration file 
require_once('error_handler.php'); 
require_once('config.php'); 
// connect to the database 
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// the SQL query to execute 
$query="SELECT * FROM contacts";

echo "<b><center>Database Output</center></b><br><br>";

?>
<table border="0" cellspacing="2" cellpadding="2">
<tr> 
<th><font face="Arial, Helvetica, sans-serif">Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">Phone</font></th>
<th><font face="Arial, Helvetica, sans-serif">Mobile</font></th>
<th><font face="Arial, Helvetica, sans-serif">Fax</font></th>
<th><font face="Arial, Helvetica, sans-serif">E-mail</font></th>
<th><font face="Arial, Helvetica, sans-serif">Website</font></th>
</tr>

<?
if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
$first=$row["first"];
$last=$row["last"];
$phone=$row["phone"];
$mobile=$row["mobile"];
$fax=$row["fax"];
$email=$row["email"];
$web=$row["web"]; 
?>

<tr> 
<td><font face="Arial, Helvetica, sans-serif"><? echo "$first $last"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><? echo "$phone"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><? echo "$mobile"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><? echo "$fax"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="mailto:<? echo "$email"; ?>">E-mail</a></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="<? echo "$web"; ?>">Website</a></font></td>
</tr>
<?
}
 // free result set
    $result->close();
}

// close connection
$mysqli->close();
echo "</table>";
?>
