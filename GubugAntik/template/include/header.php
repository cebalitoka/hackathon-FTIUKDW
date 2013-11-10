<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo htmlspecialchars($hasil['judulHalaman'])?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
	<div id="header-wrapper">
		<div id="header-navigasi-atas">
		<div id="header-wrapper-navigasi-atas">
			<ul>
				<li>Beranda</li>
				<li>Kontak</li>
				<li>Cara Order</li>
			</ul>
			
			<div id="akun-input">

			<form action="login.php" method="POST">
				<input type="text" id="username" placeholder="username/email" name="username">
				<input type="text" id="password" placeholder="password" name="password">
			</form>
		</div>
		</div>
		</div>
				<div id="header-konten">
				<div id="header-konten-logo">logo
				</div><form action="cari.php" method="GET"><input type="text" id="cari" placeholder="cari barang antik" name="cari"></form><img id="cari" src="gmbr/cari.png" alt="cari"/>
				<div id="header-navigasi-icon-wrapper">
					<div id="icon">lelang</div>
					<div id="icon">Jual</div>
					<div id="icon">Keranjang Belanja</div>
				</div>
			</div>
		<div id="header-navigasi-bawah">
			<div id="header-wrapper-navigasi-bawah">
			<ul>
				<li>Katalog</li>
				<li>Nilai Barang</li>
				<li>Para ahli</li>
			</ul>
		</div>
			</div>
		
	</div>