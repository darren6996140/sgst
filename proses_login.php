<?php
//start session
session_start();

//Sambungan ke DB
include('db_conn.php');

//Dapatkan data dari borang login
$emel = $_POST['emel'];
$kata_laluan = md5($_POST['kata_laluan']); // encrypt pwd 

//jika user klik button log masuk
if(isset($_POST['loginBtn']))
{
	//semak emel dan kata laluan dalam jadual 
	$mysql = "SELECT * FROM pelanggan
			WHERE emel = '$emel' AND kata_laluan='$kata_laluan'";
	$result = mysqli_query($conn , $mysql);
	$row = mysqli_fetch_array($result);
	
	//jika ADA data emel dan kata laluan yang sama
	if(mysqli_num_rows($result) > 0)
	{
		//dapatkan nama dan kunci primer (emel) pengguna
		$_SESSION['emel'] = $row['emel']; //simpan data session
		$nama = $row['nama'];
		
		//papar popup mesej jika berjaya
		echo '<script>alert("Selamat datang '.$nama.'");
			window.location.href="lamanutama.php";</script>';
	}
	else //jika TIDAK ADA data emel dan kata laluan yang sama
	{
		echo '<script>alert("Emel atau kata laluan SALAH!");
			window.location.href="borang_login.php";</script>' ;
			//kembali semula ke borang login
	}
}
//Close connection db
mysqli_close($conn);

?>