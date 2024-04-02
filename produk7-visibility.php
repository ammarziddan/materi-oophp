<?php 
// Overriding

class Produk {
    // ubah visibility
    public  $judul, 
            $penulis,
            $penerbit;

    // membuat diskon
    protected $diskon = 0;
            
    // protected $harga;
    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga},-)";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }

    // menambahkan fitur diskon
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    // public function getHarga() {
    //     return $this->harga;
    // }
}

class CetakInfoProduk {     
    public function cetak( Produk $produk ) { 
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga},-)";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kashimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();
echo "<hr>";

// $produk2->harga = 50000;
$produk2->setDiskon(50);
echo $produk2->getHarga();





// Urutan: 