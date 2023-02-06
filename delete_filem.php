<?php
//session
include("session.php");

//dapatkan id_filem
$id = $_GET["id"];

//delete data filem dari jadual
$mysql = "DELETE FROM maklumat_filem WHERE id_filem = '$id'";

if (mysqli_query($conn, $mysql))
{
	//papar js popup mesej jika maklumat berjaya delete
	echo '<script>alert("Filem berjaya dipadam!");
	window.location.href="senarai_filem.php";</script>';
}

else
{ 
	echo "Error ; " .mysqli_error($conn);
}
?>