<?php 

// List Kendaraan
// Mobil: Merek | Warna, Tenaga: 0 hp (Rp. 250 juta)
// Motor: Merek | Warna, Tenaga: 0 hp (Rp. 35 juta)

class Kendaraan {
    public  $merek = "merek", 
            $warna = "warna", 
            $tenaga = 0, 
            $harga = 0;

    public function helo() {
        echo "Hello world!";
    }
}

$produk1 = new Kendaraan();
// manggil function & variable / property dan method
// $produk1->helo();
// echo "<br>";

$produk1->merek = "Toyota";
$produk1->warna = "Silver";
$produk1->tenaga = 106;
$produk1->harga = 250;
echo "Mobil : $produk1->merek | $produk1->warna, Tenaga : $produk1->tenaga hp (Rp. $produk1->harga Juta)";

echo "<hr>";

$produk2 = new Kendaraan();
$produk2->merek = "Yamaha";
$produk2->warna = "Hitam";
$produk2->tenaga = 15;
$produk2->harga = 35;
echo "Motor : $produk2->merek | $produk2->warna, Tenaga : $produk2->tenaga hp (Rp. $produk2->harga Juta)";


?>