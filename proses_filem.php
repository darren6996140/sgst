<?php
//start session
include ('session.php');

//Jika user klik button Daftar
if(isset($_POST['daftar']))
{
	//Dapatkan data dari semua textfield pada borang_filem.php
	$id_filem = $_POST['id_filem'];
	$kategori_filem= $_POST['kategori_filem'];
	$harga= $_POST['harga'];
	$tajuk_filem= $_POST['tajuk_filem'];
	$tarikh_tayangan= $_POST['tarikh_tayangan'];
	$masa_tayangan= $_POST['masa_tayangan'];
	
//insert data filem dalam jadual
	$mysql = "INSERT INTO maklumat_filem
		(id_filem, kategori_filem, harga, tajuk_filem, tarikh_tayangan , masa_tayangan)
		VALUES
		('$id_filem', '$kategori_filem', '$harga', '$tajuk_filem', '$tarikh_tayangan', '$masa_tayangan')";
	
	
	if (mysqli_query($conn, $mysql)) 
	//papar js popup mesej jika maklumat filem berjaya daftar
	{
	echo '<script> 
		alert("Pendaftaran Filem Berjaya!");
		window.location.href="borang_filem.php";</script>';
	} 
	
	else 
	{
		echo "Error ; " . mysqli_error($conn); 
	}

}

else
{	//jika user klik button muat naik
	//dapatkan file .csv tersebut dan simpan dalam temp folder
	$file = $_FILES["fail_csv"]["tmp_name"];
 
    //pastikan (verify) hanya file .csv sahaja yang diupload
	if (($_FILES["fail_csv"]["type"] == "application/vnd.ms-excel")) 
	{
	//buka dan baca file tersebut, r = readonly
	$file_open = fopen($file, "r");
		
	//selagi masih ada data dalam fail csv tersebut(EOF),
	//baca line by line
		while(($data = fgetcsv($file_open)) !== FALSE) 
		{
		//simpan data ke dalam DB
		$mysql = "INSERT INTO maklumat_filem
			(id_filem, kategori_filem, harga, tajuk_filem, tarikh_tayangan , masa_tayangan)
			VALUES
			( '".$data[0]."' , '".$data[1]."' , '".$data[2]."' , '".$data[3]."' , '".$data[4]."' , '".$data[5]."' )";
			
				if (mysqli_query($conn, $mysql)) 
				{
					echo '<script>alert("Proses muat naik telah berjaya dilaksanakan.");
					window.location.href="senarai_filem.php";</script>';
				}	
	
				else 
				{
				echo "Error: " . $mysql . "<br>" . mysqli_error($conn) ;    
				}
	
		}
	//tutup file yang dibuka selepas selesai proses import 
	fclose($file_open);
	}	
		else 
		{
			//papar popup mesej jika upload file selain .csv
			echo '<script>alert("Sila pilih file .csv sahaja!");
			window.location.href="borang_filem.php"</script>';
		}
}
//close connection 
mysqli_close($conn);
?>