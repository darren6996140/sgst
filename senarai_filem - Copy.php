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
}

table
{
	border: 3px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color: GainsBoro;
	font-family: 'glacial indifference';
}

td
{ 
	text-align: center;
	height: 25px;
	font-size: 25px;
}

th
{
	height:30px;
	text-align:center;
	font-weight: bold;
	background-color: GainsBoro;
	padding: 10px 0px;
}

#select
{ 
	font-family: 'glacial indifference';
	font-weight: bold;
	font-size: 25px;
}

#button
{
	background-color: white;
	font-family: 'glacial indifference';
	font-size: 30px;
	font-weight: bold;
}
</style>
</head>
<body>
<?php
include ("header.php");
include ("topnav2.php");
?>

<div id="mainbody">
<div id="tajuk">
<p>Senarai Filem</p>
</div>
<form action="" method="post">
<p><center>
<select name="kategori" id="select">
	<option>Pilih Carian</option>
	<option value="kategori_filem">Kategori Filem</option>
	<option value="harga">Harga</option>
	<option value="tajuk_filem">Tajuk Filem</option>
	<option value="tarikh_tayangan">Tarikh Tayangan</option>
	<option value="masa_tayangan">Masa Tayangan</option>
</select>
: <input type="text" name="carian" id="select">
<input type="submit" value="Cari" name="cari" id="button"> 
</p><center>
</form>

<?php
//jika user klik butang "cari" dan textbox carian tidak empty
if(isset($_POST['cari']) && !empty($_POST['carian']))
{
	//kenalpasti dropdown list apa yang dipilih oleh user
	switch ($_POST["kategori"])
	{
		case "kategori_filem": //jika user pilih search by kategori filem
		$query = "SELECT * FROM maklumat_filem WHERE kategori_filem LIKE '%$_POST[carian]%'";
		break;
		
		case "harga": //jika user pilih search by harga
		$query = "SELECT * FROM maklumat_filem WHERE harga LIKE '%$_POST[carian]%'";
		break;
		
		case "tarikh_tayangan": //jika user pilih search by tarikh tayangan
		$query = "SELECT * FROM maklumat_filem WHERE tarikh_tayangan LIKE '%$_POST[carian]%'";
		break;
		
		case "masa_tayangan": //jika user pilih search by masa tayangan
		$query = "SELECT * FROM maklumat_filem WHERE masa_tayangan LIKE '%$_POST[carian]%'";
		break;
		
		default: //jika user pilih search by tajuk filem
		$query = "SELECT * FROM maklumat_filem WHERE tajuk_filem LIKE '%$_POST[carian]%'";
	}
}

else
{
	//jika user tidak buat carian, papar senarai secara default
	$query = "SELECT * FROM maklumat_filem";
}

$mysql = $query;
$result = mysqli_query($conn, $mysql) or die(mysql_error());

if (mysqli_num_rows ($result) > 0)
{
	//table untuk paparan data
	echo "<table border = '2'>";
	echo "<col width='80'>";  //saiz column 1
	echo "<col width='150'>"; //saiz column 2
	echo "<col width='80'>";  //saiz column 3
	echo "<col width='300'>"; //saiz column 4
	echo "<col width='200'>"; //saiz column 5
	echo "<col width='150'>"; //saiz column 6
	echo "<col width='80'>";  //saiz column 7
	echo "<col width='80'>";  //saiz column 8
	echo "<tr>";
	echo "<th>ID Filem</th>";
	echo "<th>Kategori Filem</th>";
	echo "<th>Harga</th>";
	echo "<th>Tajuk Filem</th>";
	echo "<th>Tarikh Tayangan</th>";
	echo "<th>Masa Tayangan</th>";
	echo "<th>Edit</th>";
	echo "<th>Padam</th>";
	
	//papar semua data dari jadual dalam DB 
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "<tr height='110'>";
		echo "<td>".$row['id_filem']."</td>";
		echo "<td>".$row['kategori_filem']."</td>";
		echo "<td>".$row['harga']."</td>";
		echo "<td>".$row['tajuk_filem']."</td>";
		echo "<td>".$row['tarikh_tayangan']."</td>";
		echo "<td>".$row['masa_tayangan']."</td>";
		echo "<td><a href='edit_filem.php?id=".$row['id_filem']."'> <img src='images/edit.png' width='50' height='50'> </a> </td>";
		echo "<td><a href='delete_filem.php?id=".$row['id_filem']."'> <img src='images/delete.png' width='50' height='50'> </a> </td>";
		echo " </tr>";
	}
	
	echo"</table>";
}

else 
{
	echo "<center>Tiada Data</center>";
}
?>

</div>
<?php
include ("footer.php");
?>

</body>
</html>