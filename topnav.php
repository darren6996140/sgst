<html>
<head>
<style>
u1 {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: black;
}

li{
	float: left;
}

li a{
	display: inline-block;
	color: black;
	text-align: center;
	padding: 20px 16px;
	text-decoration: none;
	font-weight: bold;
	font-size: 25px;
}

li a:hover {
	background-color: black;
	color: white;
}
/*  Responsive layout - when the screen is less than 400 px wide,
	make the navigation links stack on top of each other
	instead of next to each other */
@media screen and (max-width: 400px){
	.topnav a{
		float: none;
		width: 100%;
	}
}

</style>
</head>
<body>

<u1>
	<li><a href="index.php">Menu Utama</a></li>
	<li><a href="maklumat_filem.php?a=0">Filem</a></li>
	<li><a href="hubungi.php?a=0">Hubungi Kami</a></li>
	<li style="float:right"><a href="borang_login.php">Log Masuk</a></li>
</u1>

</body>
</html>
