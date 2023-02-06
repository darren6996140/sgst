<?php
$db_host = "localhost";
$db_uname = "root";
$db_pwd = "";
$db_name = "sgst";


// Create connection 
$conn = mysqli_connect($db_host, $db_uname, $db_pwd, $db_name);

// Create connection
if (!$conn) {
	die(mysqli_connect_error());
}

//echo "Sambungan  ke DB berjaya";

?>