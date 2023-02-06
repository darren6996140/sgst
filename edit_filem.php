<?php
//sambungan ke DB
include('db_conn.php');

//dapat id_filem
$id = $_GET["id"];

//jika user klik KEMASKINI update record dalam jadual
if(isset($_POST['edit']))
{
	$sql = "UPDATE maklumat_filem
			SET kategori_filem= '".$_POST["kategori_filem"]."',
				harga= '".$_POST["harga"]."',
				tajuk_filem= '".$_POST["tajuk_filem"]."',
				tarikh_tayangan= '".$_POST["tarikh_tayangan"]."',
				masa_tayangan= '".$_POST["masa_tayangan"]."'
				WHERE id_filem = '$id'";

	if (mysqli_query($conn, $sql))
	{
		echo '<script>alert("Kemaskini Bilik Berjaya!");
		window.locatin.href="edit_filem.php?id'.$id.'";</script>';
	}
	else
	{
		echo "Error; " .mysqli_error($conn);
	}
}
//proses update tamat

//dapatkan data filem dari jadual untuk display dalam textfield
$query = "SELECT * FROM maklumat_filem WHERE id_filem = '$id'";
$result = mysqli_query($conn, $query) or die(mysql_error());
$row1 = mysqli_fetch_array($result);

?>
<html>
<head>
<style>
#mainbody
{
	background-color: white;
	padding: 20px 0px;
	font-family: 'glacial indifference';
}

#tajuk
{
	font-size: 50px;
	font-family: 'glacial indifference';
	font-weight: bold;
	text-align: center;
	padding: 20px 0px 0px 0px;
}

table
{
	border: 3px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color: GainsBoro;
	font-family: 'glacial indifference';
}

#label
{
	text-align: right;
}

#button
{
	background-color: white;
	font-family: 'glacial indifference';
	font-size: 20px;
	font-weight: bold;
}

#file
{
	font-family: 'glacial indifference';
	font-size: 20px;
	font-weight:bold;
}

input[type=text]
{
	padding: 5px;
	width: 200px;
	font-family: 'glacial indifference';
	font-size: 15px;
}

#date
{
	padding: 5px;
	width: 150px;
	font-family: 'glacial indifference';
	font-size: 15px;
}

#time
{
	padding: 5px;
	width: 100px;
	font-family: 'glacial indifference';
	font-size: 15px;
}
</style>
</head>

<body>
<?php
include ("header.php");
include ("topnav2.php");
?>

<div id="mainbody">
<form method="POST" enctype="multipart/form-data">
<div id="tajuk">
<p>Borang Kemaskini Maklumat Filem</p>
</div>
<table cellpadding=5px>
<tr>
	<td style="width: 20px;"></td>
	<td></td>
	<td></td>
	<td style="width: 20px;"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">ID Filem: </td>
	<td><input type="text" name="id_filem" size="35" placeholder="00000" value="<?php echo $row1['id_filem'];?>" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Kategori Filem: </td>
	<td><input type="text" name="kategori_filem" size="35" value="<?php echo $row1['kategori_filem'];?>" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Harga: </td>
	<td><input type="text" name="harga" placeholder="10" size="35" value="<?php echo $row1['harga'];?>"required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id= "label">Tajuk: </td>
	<td><input type="text" name="tajuk_filem" value="<?php echo $row1['tajuk_filem'];?>"required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Tarikh: </td>
	<td><input type="date" name="tarikh_tayangan" value="2020-01-01" value="<?php echo $row1['tarikh_tayangan'];?>"required id="date"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Masa: </td>
	<td><input type="time" name="masa_tayangan" value="00:00" value="<?php echo $row1['masa_tayangan'];?>"required id="time"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td id="label"><input type="submit" name="edit" value="Kemaskini" id="button"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>
</form>
</div>

<?php
include("footer.php");
?>
</body>
</html>