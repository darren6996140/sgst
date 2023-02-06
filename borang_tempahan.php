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
#date
{
	padding: 5px;
	width: 150px;
	font-family: 'glacial indifference';
	font-size: 15px;
}
table
{
	border: 3px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color: GainsBoro;
	font-family: 'glacial indifference';
}
#select
{ 
	font-family: 'glacial indifference';
	font-weight: bold;
	font-size: 25px;
	width: 200px;
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
input[type=number]
{
	padding: 5px;
	width: 50px;
	font-family: 'glacial indifference';
	font-size: 15px;
}
</style>
</head>

<body>
<?php
include("header.php");
include("topnav2.php");
?>

<div id="mainbody">
<form action="proses_tempahan.php" method="POST">
	<div id="tajuk"><p>Borang Tempahan Filem</p></div>
<table id="table" cellpadding=5px>
<tr>
	<td style="width: 30px"></td>
	<td></td>
	<td></td>
	<td style="width: 30px"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<div>
<tr>
	
	<td>Tajuk Filem: </td>
	<td>
		<select name="tajuk_filem" align="center" id="select"required>
			<option value="">-- Sila Pilih --</option>
			<?php
			$mysql = mysqli_query($conn, 
			"SELECT * FROM maklumat_filem ORDER BY tajuk_filem");
			while ($row = mysqli_fetch_array($mysql))
			{?>
				<option value="<?php echo $row['id_filem']; ?>">
					<?php echo $row['tajuk_filem'];?> </option>
			<?php } ?>
		</select></td>
	<td></td>
</tr>
</div>
<tr>
	<td>Tarikh Tayangan: </td>
	<td><input type="date" name="tarikh_tayangan" id="date"required></td>
	<td></td>
</tr>
<tr>
	<td>Bilangan Tiket:</td>
	<td><input type="number" name="bil_tiket" min="1" step="0" required></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="tempahBtn" value="TEMPAH" id="button"></td>
	<td></td>
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