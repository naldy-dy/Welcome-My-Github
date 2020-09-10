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

	// produk-1
	$produk = new Hp;
	$produk->merk = "iphone";
	$produk->tipe = "10 pro max";
	$produk->display =ucwords("super amoled");
	$produk->ram = "4gb";
	$produk->harga = number_format(16000000) ;

	// produk-2
	$produk2 = new Hp;
	$produk2->merk = "iphone";
	$produk2->tipe = "10 pro max";
	$produk2->display =ucwords("super amoled");
	$produk2->ram = "4gb";
	$produk2->harga = number_format(16000000) ;

// menampilkan isi data yang dipilih di web bros

	echo "Yang ditampilkan ".$produk->cetakdisplay();
	echo "<br>";
	echo "Harga yang ditampilkan " .$produk->tampilharga();
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "$produk->merk";
	echo "<br>";
	echo "$produk2->merk";
	echo "<br>";

	if($produk2 === $produk){
		echo "Produk Sama";
	}else{
		echo "Produk Tidak Sama";
	}



