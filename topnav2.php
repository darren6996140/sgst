<?php
//session
include("session.php");
?>
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

li a, dropbtn {
	display: inline-block;
	color: black;
	text-align: center;
	padding: 20px 16px;
	text-decoration: none;
	font-weight: bold;
	font-size: 25px;
}

li a:hover, dropdown:hover .dropbtn{
	background-color: black;
	color: white;
}

li.dropdown{
	display: inline-block;
	float: right;
}

.dropdown-content{
	display: none;
	position: absolute;
	right: 17; /*adjust */
	background-color: lightgray;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
	z-index: 1;
}

.dropdown-content a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

.dropdown-content a:hover {
	background-color: yellow;
}

.dropdown:hover .dropdown-content{
	display: block;
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
	<li class="dropdown"><a href="#" class="dropbtn">Hai, <?php echo $nama; ?> </a>
		<div class="dropdown-content">
		<!-- menu yang berbeza untuk pengguna yang berlainan -->
			<?php
				if ($peranan == 1) // admin
				{
					$menu1= '<a href="borang_filem.php">Daftar Filem</a>';
					$menu2= '<a href="senarai_filem.php">Senarai Filem</a>';
					$menu3= '<a href="senarai_tempahan2.php">Senarai Tempahan Tiket</a>';
				}
				
				else //pengguna biasa
				{
					$menu1= '<a href="borang_tempahan.php">Tempah Tiket</a>';
					$menu2= '<a href="senarai_tempahan.php">Senarai Tempahan Tiket</a>';
					$menu3= '';
				}
				echo $menu1;
				echo $menu2;
				echo $menu3;
			?>
			<a href="logout.php">Log Keluar</a>
		</div>
	</li>
</u1>
</body>
</html>