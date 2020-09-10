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
		function tampilharga(){
			return $this->harga;
		}
	}

// penginputan data kelas
	$produk = new Hp;
	$produk->merk = "iphone";
	$produk->tipe = "10 pro max";
	$produk->display =ucwords("super amoled");
	$produk->ram = "4gb";
	$produk->harga = number_format(16000000) ;

// menampilkan isi data yang dipilih di web bros
	echo "$produk->merk";
	echo "Yang ditampilkan ".$produk->cetakdisplay();
	echo "Harga yang ditampilkan " .$produk->tampilharga();



