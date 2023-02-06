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
	width: 1000px;
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
<form name="daf" action="proses_filem.php" method="POST" enctype="multipart/form-data">
<div id="tajuk">
<p>Borang Daftar Filem</p>
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
	<td><input type="text" name="id_filem" size="35" placeholder="00000" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Kategori Filem: </td>
	<td><input type="text" name="kategori_filem" size="35" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Harga: </td>
	<td><input type="text" name="harga" placeholder="10" size="35" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id= "label">Tajuk: </td>
	<td><input type="text" name="tajuk_filem" required></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Tarikh: </td>
	<td><input type="date" name="tarikh_tayangan" value="2020-01-01" required id="date"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td id="label">Masa: </td>
	<td><input type="time" name="masa_tayangan" value="00:00" required id="time"></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td id="label"><input type="submit" name="daftar" value="Daftar" id="button"></td>
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

<!-- borang untuk muatnaik-->
<form name="up" action="proses_filem.php" method="POST" enctype="multipart/form-data">
<br>
<h2><center>Pilih fail untuk dimuat naik (Fail Excel .csv sahaja): <input type="file" name="fail_csv" id="file">
<p><input type="submit" name="upload" value="Muat Naik" id="button"></p>
</center></h2>
</form>
</div>
<?php
include ("footer.php");
?>
</body>
</html>