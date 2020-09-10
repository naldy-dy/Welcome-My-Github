<?php 


// class-1
	// penamaan kelas PHP
	class Hp{

		// nama atribut
		public
		$merk,
		$tipe,
		$display,
		$ram,
		$harga;

		// fungtion-1
		public function cetakdisplay(){
			return $this->display;
		}

		// fungtion-2
		function tampilharga(){
			return $this->harga;
		}
	}

// class-2
	class Mobil extends Hp{
		function selfParking(){
			echo "Parkir sendiri";
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


	$tesla = new mobil;
	$tesla->merk = "tesla";
	$tesla->type = "Model X";
	$tesla->mesin = "2000cc";
	$tesla->max_speed = "280km/h";

// menampilkan isi data yang dipilih di web bros

$tesla->selfParking();



