<?php
require_once("config.php");

if(isset($_GET['add'])){
	$id = mysql_real_escape_string((int)$_GET['add']);
	$qt = mysql_query("SELECT produk_id, produk_jumlah FROM tw_produk WHERE produk_id='$id'");
	while($qt_row = mysql_fetch_assoc($qt)){
		if($qt_row['produk_jumlah'] != $_SESSION['cart_'.$_GET['add']] && $qt_row['produk_jumlah'] > 0){
			$_SESSION['cart_'.$_GET['add']]+='1';
			header("Location: index.php");
		} else {
			echo '<script language="javascript">alert("Stok produk tidak mencukupi!"); document.location="index.php";</script>';
		}
	}

}

function cart(){
	foreach($_SESSION as $name => $value){
		if($value > 0){
			if(substr($name, 0, 5) == 'cart_'){
				$id = substr($name, 5, (strlen($name)-5));
				$get = mysql_query("SELECT * FROM tw_produk WHERE produk_id='$id'");
				while($get_row = mysql_fetch_assoc($get)){
					$sub = $get_row['produk_harga'] * $value;
					echo '<div style="font-size:11px; margin-bottom:-10px">&raquo; '.$get_row['produk_nama'].' @ Rp. '.$get_row['produk_harga'].' X '.$value.' = Rp. '.$sub.'</div><br>';
				}
			}
			$total += $sub;
		}
	}
	if($total == 0){
		echo 'Keranjang Belanja Kosong!';
	} else {
		echo '<div style="text-align:right; font-size:11px;"><a href="detail.php">&raquo; Detail &laquo;</a></div>';
	}
}

function produk(){
	$sql = mysql_query("SELECT * FROM tw_produk ORDER BY produk_id DESC");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($row = mysql_fetch_assoc($sql)){
			echo '
			<div class="item">
				<p><b>'.$row['produk_nama'].'</b></p>
				<img src="img/produk/'.$row['produk_gambar'].'" width="150" height="150">
				<p>'.$row['produk_keterangan'].'</p>
				<b>Harga: '.$row['produk_harga'].' &bull; Jumlah: '.$row['produk_jumlah'].' &bull; <a href="index.php?add='.$row['produk_id'].'">Beli</a></b>
			</div>
			';
		}
	}
}
?>