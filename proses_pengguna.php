<?php
//sambungan ke DB
include ('db_conn.php');

/*dapatkan data dari semua medan/textfield
pada borang_penggunabaru.php*/
$nama=$_POST['nama'];
$emel=$_POST['emel'];
$kata_laluan=md5($_POST['kata_laluan']);
$no_HP=$_POST['no_HP'];

//semak jika emel telah wujud dalam DB
$semak = "SELECT emel FROM pelanggan WHERE emel = '$emel'";
$result = mysqli_query($conn, $semak) or die(mysqli_error());

//jika emel sudah wujud, keluar js popup mesej
if (mysqli_num_rows($result)> 0)
{
	echo '<script>
		alert("Emel anda telah didaftarkan! Sila guna emel lain.");
		window.location.href="borang_penggunabaru.php";</script>';
}

else{
	//jika emel belum wujud, simpan maklumat pengguna dalam DB
	$mysql= "INSERT INTO pelanggan
	(emel, kata_laluan, nama, no_HP, peranan)
	VALUES ('$emel', '$kata_laluan', '$nama', '$no_HP' , 2)";
	
if (mysqli_query($conn, $mysql)){
	//papar js popup mesej jika pengguna baru berjaya daftar
	echo '<script>
		 alert("Pendaftaran Pengguna Baru Berjaya!")
		 window.location.href="borang_login.php";</script>';
		 //selepas berjaya daftar, kembali ke login page
	}
else{
	echo "Error;" . mysqli_error($conn);
	}
}

//Close connection
mysqli_close($conn);
?>