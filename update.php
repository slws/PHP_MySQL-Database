<?
// load configuration file 
require_once('error_handler.php'); 
require_once('config.php'); 
$id=$_GET['id'];
// connect to the database 
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// the SQL query to execute 
$query="SELECT * FROM contacts WHERE id='$id'";
if ($result = $mysqli->query($query)) {
    // fetch associative array
$row = $result->fetch_assoc()
$first = $row["first"];
$last = $row["last"];
$phone = $row["phone"];
$mobile = $row["mobile"];
$fax = $row["fax"];
$email = $row["email"];
$web = $row["web"];
    }

    // free result set
    $result->close();
}

// close connection 
mysql_close();
?>



<form action="updated.php">
<input type="hidden" name="ud_id" value="<? echo "$id"; ?>">
First Name: <input type="text" name="ud_first" value="<? echo "$first"?>"><br>
Last Name: <input type="text" name="ud_last" value="<? echo "$last"?>"><br>
Phone Number: <input type="text" name="ud_phone" value="<? echo "$phone"?>"><br>
Mobile Number: <input type="text" name="ud_mobile" value="<? echo "$mobile"?>"><br>
Fax Number: <input type="text" name="ud_fax" value="<? echo "$fax"?>"><br>
E-mail Address: <input type="text" name="ud_email" value="<? echo "$email"?>"><br>
Web Address: <input type="text" name="ud_web" value="<? echo "$web"?>"><br>
<input type="Submit" value="Update">
</form>
