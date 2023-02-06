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

#tajuk_filem
{
	font-size: 40px;
	font-weight: bold;
}

table
{
	border: 3px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color: GainsBoro;
	font-family: 'glacial indifference';
	font-size: 30px;
}

table, td
{
	text-align: center;
	padding-bottom: 10px;
}

#center
{
	font-weight:bold;
	font-size: 100px;
	font-family: 'glacial indifference';
}

</style>
</head>

<body>
<?php
include("db_conn.php");

if($_GET['a'] == 1)
{
	$topmenu = "topnav2.php";
}
else
{
	$topmenu = "topnav.php";
}

include("header.php");
include($topmenu);
?>

<div id="mainbody">
<div id="tajuk"><p>Maklumat Filem</p></div>

<?php
//papar data dari jadual DB
$mysql = "SELECT * FROM maklumat_filem";
$result = mysqli_query($conn, $mysql) or die(mysql_error());

if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
?>
 
<table>
<tr>
<td></td>
<td><u id="tajuk_filem"  ><?php echo $row['tajuk_filem']; ?></u><br><br>
<?php echo $row['kategori_filem']; ?><br>
RM <?php echo $row['harga']; ?><br>
<?php echo $row['tarikh_tayangan']; ?><br>
<?php echo $row['masa_tayangan']; ?></td>
<td></td>
</tr>

<tr>
<td colspan=3></td>
</tr>
<?php } ?>
</table>

<?php
}
else 
{
	echo "<center id='center'>Tiada Data</center>";
}
?>

</div>

<?php
include("footer.php");
?>
</body>
</html>