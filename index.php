<?php 

// penamaan kelas PHP
	class Hp{
		public
		$merk,
		$tipe,
		$display,
		$ram,
		$harga; 	
	}

// penginputan data kelas
	$produk = new Hp;
	$produk->merk = "iphone";
	$produk->tipe = "10 pro max";
	$produk->display = "super amoled";
	$produk->ram = "4gb";
	$produk->harga = "16 jt";

// menampilkan isi data yang dipilih di web bros
	echo "$produk->display";



