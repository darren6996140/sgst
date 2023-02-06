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
	padding: 60px 0px 30px 0px;
}

table
{
	border: 3px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color: GainsBoro;
	font-family: 'glacial indifference';
}

table, td
{ 
	text-align: right;
}

#form
{
	padding: 10px;
	width: 200px;
	font-family: 'glacial indifference';
	font-size: 15px;
}

#button
{
	background-color: white;
	font-family: 'glacial indifference';
	font-size: 20px;
	font-weight: bold;
}

a
{
	font-family: 'glacial indifference';
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	color: #1a8cff;
}
</style>
</head>
<body>

<?php
include ("header.php");
include ("topnav.php");
?>

<div id="mainbody">
<form action="proses_pengguna.php" method="POST">
	<div id="tajuk">Daftar Pengguna Baru</div><p>
		<table cellpadding=5px>

<tr>
	<td style="width: 20px"></td>
	<td></td>
	<td></td>
	<td style="width: 20px"></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td>E-mel: </td>
	<td><input type="email" name="emel" placeholder="emel@emel.com" id="form" required></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td>Kata Laluan: </td>
	<td><input type="password" name="kata_laluan" placeholder="4-8 aksara sahaja" pattern=".{4,8}" id="form" required></td>
	<td></td>												<!-- pattern ini untuk set had atas dan bawah -->
</tr>
<tr>
	<td></td>
	<td>Nama: </td>
	<td><input type="text" name="nama" id="form" required></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td>No Telefon: </td>
	<td><input type="text" name="no_HP" placeholder="0121234567" id="form" required></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="daftarBtn" value="Daftar" id="button" ></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td><a href="borang_login.php">Kembali</a></td>
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
include ("footer.php");
?>

</body>
</html>