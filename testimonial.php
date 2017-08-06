<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Randa Shop - Racikan Sunda</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	function testimoni() {
		alert('Terima Kasih! Testimoni Anda berhasil terkirim!');
		window.location.href='index.php';
	}
	</script>
</head>
<body>

	<div id="container">

		<div id="header">
			<h1>Randa Shop - Racikan Sunda</h1>
			<span>Menjual berbagai makanan khas sunda</span>
		</div>

		<div id="menu">
			<a href="index.php">Home</a>
			<a class="selected" href="testimonial.php">Testimonial</a>
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
			<div class="title">&raquo; Testimonial</div>
			Tulis Testimonial Anda di bawah ini:
			<form action="" method="post">
				<p><input type="text" name="nama" placeholder="Nama Lengkap" required></p>
				<p><input type="text" name="mail" placeholder="Email Valid" required></p>
				<p><textarea name="pesan" rows="5" cols="40" placeholder="Testimonial Anda" required></textarea></p>
				<p><input type="button" name="button" value="Proses" onclick="testimoni();"></p>
			</form>
		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; 2017 Randa Shop<br>Thanks to Allah
		</div>

	</div>

</body>
</html>