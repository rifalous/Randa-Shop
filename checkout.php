<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Randa Shop - Racikan Sunda</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">

		<div id="header">
			<h1>Randa Shop - Racikan Sunda</h1>
			<span>Menjual berbagai makanan khas sunda</span>
		</div>

		<div id="menu">
			<a class="selected" href="index.php">Home</a>
			<a href="testimonial.php">Testimonial</a>
		</div>

		<div id="sidebar">
			<div class="title">&raquo; Keranjang Belanja</div>
			<div class="body">
				<?php cart(); ?>
			</div>

			<div class="title">&raquo; Tentang</div>
			<div class="body">
				<img src="img/Logo.jpg" width="200" height="200">
				Randa Shop adalah Toko Online yang menjual berbagai makanan khas sunda.<br>
			</div>
		</div>

		<div id="content">
			<div class="title">&raquo; Checkout &raquo; Data Pengiriman</div>
			
			Silahkan isi data pengiriman barang / produk di bawah ini:
			<form action="finish.php" method="post">
				<input type="hidden" name="total" value="<?php echo abs((int)$_GET['total']); ?>">
				<p><input type="text" name="nama" size="30" placeholder="Nama Lengkap" required></p>
				<p><textarea name="alamat" rows="3" cols="40" placeholder="Alamat Lengkap" required></textarea></p>
				<p><input type="submit" name="finish" value="Finish"></p>
			</form>
		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; 2017 Randa Shop<br>Thanks to Allah
		</div>

	</div>

</body>
</html>