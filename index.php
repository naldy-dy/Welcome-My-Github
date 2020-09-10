<?php 

	class Hp{
		public
		$merk,
		$tipe,
		$display,
		$ram,
		$harga; 	
	}

	$produk = new Hp;
	$produk->merk = "iphone";
	$produk->tipe = "10 pro max";
	$produk->display = "super amoled";
	$produk->ram = "4gb";
	$produk->harga = "16 jt";

	echo "$produk->display";



