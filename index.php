<?php 

// penamaan kelas PHP
	class Hp{

		// nama atribut
		public
		$merk,
		$tipe,
		$display,
		$ram,
		$harga;

		public function cetakdisplay(){
			return $this->display;
		}
	}

// penginputan data kelas
	$produk = new Hp;
	$produk->merk = "iphone";
	$produk->tipe = "10 pro max";
	$produk->display =ucwords("super amoled");
	$produk->ram = "4gb";
	$produk->harga = "16 jt";

// menampilkan isi data yang dipilih di web bros
	echo "Yang ditampilkan ".$produk->cetakdisplay();



