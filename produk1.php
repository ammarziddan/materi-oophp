<?php 

// Kumpulan Produk
// Komik
// Game

class Produk {
    public  $judul = "judul", // menambahkan nilai default
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    // public function sayHello() {
    //     return "Hello World!";
    // }

    public function getLabel() {
        // $this untuk mengambil property pada class bersangkutan
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto"; // memilih property judul pada class Produk

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "test"; // menambah property baru yg tdk ada pada class
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kashimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo "Komik: $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

//menampilkan judul & penerbit melalui method
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk;
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik: " . $produk3->getLabel();
echo "<hr>";
echo "Game: " . $produk4->getLabel();







// urutan: 7-11, 23-26, 28-31,33-40, 13-15, 41, 17-20, 44, 48-56
