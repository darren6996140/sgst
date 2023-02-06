<?php
//session
include("session.php");

//Dapatkan data dari semua medan pada borang_tempahan.php

$filem = $_POST['filem'];
$bilangan = $_POST['bilangan'];
$tarikh_tayangan = $_POST['tarikh_tayangan'];

if ($bilangan == 0 && $tarikh_masuk == 0)
{
	echo '<script> alert("Masukkan data dalam ruang tersebut!");
		window.location.href="borang_tempahan.php";</script>';
}

else
{
	$mysql = "INSERT INTO tiket
	(emel, id_filem, bilangan,) VALUES ('$emel', '$id_filem','$bilangan')";
	
	if (mysqli_query($conn, $mysql))
	{
		//papar javascript alert jika tempahan berjaya dimasukkan
		echo '<script> alert("Tempahan Berjaya!");
		window.location.href="senarai_tempahan.php";</script>';
		//selepas berjaya, redirect ke senarai tempahan
	}
	
	else
	{
		echo "Error ;" .mysqli_error($conn);
	}
}

//close connection
mysqli_close($conn);
?>