<?php 
// Constructor: method yang otomatis dijalankan ketika sebuah class dijalankan

class Produk {
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;

    // membuat constructor. harus dengan nama __construct()
    // method ini otomatis dijalankan ketika membuat object baru
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        // echo "Hello World! "; // contoh
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kashimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$produk3 = new Produk("", "Ziddan");

echo "Komik: " . $produk1->getLabel();
echo "<hr>";
echo "Game: " . $produk2->getLabel();
echo "<hr>";
echo "Game: " . $produk3->getLabel();







// Urutan: 10&13, 12-18, 25&26, 27&33