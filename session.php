<?php
//Start session
session_start ();

//Sambungan ke DB
include ('db_conn.php');

//Simpan data session berdasarkan session kunci primer
$emel = $_SESSION['emel'];

//dapatkan data pengguna berdasarkan session kunci primer
$mysql = mysqli_query($conn, "SELECT * FROM pelanggan WHERE emel= '$emel'");
$row = mysqli_fetch_array($mysql);

$nama = $row['nama'];
$peranan = $row['peranan']; //access level -- 1=admin 2=penggunabiasa

//jika data session tidak dijumpai dalam jadual
if(!isset($emel))
{
	header("Location: index.php"); //kembali ke paparan utama
}

?>