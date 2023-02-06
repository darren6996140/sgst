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

table, td
{
	text-align: right;
}

#form
{
	padding: 10px;
	font-family: 'glacial indifference';
	width: 200px;
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
<!-- form action akan bawa pengguna untok proses seterusnya
	selepas pengguna kilk butang Log Masuk -->
	
<form action="proses_login.php" method="POST">
	<div id="tajuk"><p>Log Masuk</p></div>
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
	<td>E-mel :</td>
	<td><input type="text" name="emel" id="form" required</td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td>Kata Laluan :</td>
	<td><input type="password" name="kata_laluan" id="form" required</td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="loginBtn" value="Log Masuk" id="button"></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td><a href="borang_penggunabaru.php">Daftar Pengguna Baru</a></td>
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
include("footer.php")
?>

</body>
</html>