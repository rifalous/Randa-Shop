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
			<div class="title">&raquo; Tentang</div>
			<div class="body">
				<img src="img/Logo.jpg" width="200" height="200">
				Randa Shop adalah Toko Online yang menjual berbagai makanan khas sunda.<br>
			</div>
		</div>

		<div id="content">
			<div class="title">&raquo; Proses Belanja Selesai</div>
			
			<?php
			if($_POST['finish']){
				session_destroy();
				echo 'Terima kasih Anda sudah berbelanja di Toko Online kami. Dan berikut ini adalah data yang perlu Anda catat.';
				echo '<p>Total biaya untuk pembelian Produk adalah Rp.'.$_POST['total'].' dan biaya bisa di kirimkan melalui Rekening Bank BCA dengan nomor rekening xxxx-xxxx-xxxx atas nama Dadang.</p>';
				echo '<p>Dan barang akan kami kirim ke alamat di bawah ini:</p>';
				echo '<p>Nama Lengkap : '.$_POST['nama'].'<br>';
				echo 'Alamat Lengkap : '.$_POST['alamat'].'</p>';

				echo 'Terima Kasih.<br>';
			}else{
				header("Location: index.php");
			}
			?>

		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; 2017 Randa Shop<br>Thanks to Allah
		</div>

	</div>

</body>
</html>