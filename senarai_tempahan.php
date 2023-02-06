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
	font-size: 30px;
}

#button
{
	background-color: white;
	font-family: 'glacial indifference';
	font-size: 25px;
	font-weight: bold;
}

#notis
{
	color: red;
	font-family: 'glacial indifference';
	font-size: 20px;
	font-weight: bold;
}
</style>
</head>
<body>
<?php
include("header.php");
include("topnav2.php");
?>
<div id="mainbody">
<div id="tajuk">
<p>Senarai Tempahan Tiket</p>
</div>
<form action="" method="post">
<p><center>
	<select name="kategori" id="select">
		<option>Pilih Carian</option> 
		<option value="filem"
		<?php echo (isset($_POST['kategori']) && $_POST['kategori'] == 'id_tiket') ? 'selected="selected"' : ''; ?> >ID tiket
		</option>
		
		<option value="kategori"
		<?php echo (isset($_POST['kategori']) && $_POST['kategori'] == 'tajuk_filem') ? 'selected="selected"' : ''; ?> >Emel
		</option>
		
		<option value="harga" 
		<?php echo (isset($_POST['kategori']) && $_POST['kategori'] == 'harga') ? 'selected="selected"' : ''; ?> >ID filem
		</option>
		
	</select>
	
	: <input id="select" type="text" name="carian" value="<?php echo isset($_POST['carian']) ? $_POST['carian'] : '' ?>" />
	<input id="button" type="submit" value="CARI" name="cari">
	</p><center>
	</form>
<?php
//jika user klik butang "Cari" dan textbox carian tidak empty

if(isset($_POST['cari']) && !empty($_POST['carian'])) {
	
	//kenalpasti dropdown list apa yang dipilih oleh user
	switch($_POST["kategori"]) {
		case "id_tiket": //jika user pilih search by id_tiket
		$query = "SELECT * FROM tiket 
			WHERE id_tiket LIKE '%$_POST[carian]%'";
		break;
		
		case "tajuk_filem": //jika user pilih search by emel
		$query = "SELECT * FROM tiket 
			WHERE emel LIKE '%$_POST[carian]%'";
		break;
		
		default: //jika user pilih search by id_filem
		$query = "SELECT * FROM tiket 
			WHERE id_filem = '$_POST[carian]'";
	}
}
	else {
		//jika user tidak buat carian, papar senarai secara default
		$query = "SELECT * FROM tiket";
	}
	$mysql = $query;
	$result = mysqli_query($conn, $mysql) or die(mysql_error());
	
	if (mysqli_num_rows($result) > 0){
		//table untuk paparan data
		echo "<table>";
		echo "<col width='100'>"; //saiz column 1
		echo "<col width='200'>"; //saiz column 2
		echo "<col width='100'>"; //saiz column 3
		echo "<col width='100'>"; //saiz column 4
		echo "<col width='200'>"; //saiz column 5
		echo "<col width='100'>"; //saiz column 6
		echo "<col width='100'>"; //saiz column 7
		echo "<col width='100'>"; //saiz column 8
		echo "<tr>";
		echo "<th>ID Tiket</th>";
		echo "<th>Emel</th>";
		echo "<th>ID Filem</th>";
		echo "<th>Bilangan Tiket</th>";

		echo "<th>Harga</th>";
		echo "</tr>";
		
		//papar semua data dari jadual dalam DB
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr height='110' width='150'>";
			echo "<td width='50px'>".$row['id_tiket']."</td>";
			echo "<td>".$row['emel']."</td>";
			echo "<td>".$row['id_filem']."</td>";
			echo "<td>".$row['bilangan']."</td>";
			echo "<td width='0px'>RM 20</td>"; 
			echo  "</tr>";
		}
			echo "</table>";
	}
	else { 
	echo "<center>Tiada Data</center>";
	}
?>
</div>
<?php
include("footer.php");
?>


</body>
</html>