<?php 

// List Produk Kendaraan
// Mobil: Merek | Warna, Tenaga: 0 hp (Rp. 0)
// Motor: Merek | Warna, Tenaga: 0 hp (Rp. 0)

class Kendaraan {
    public  $merek,
            $warna,
            $tenaga,
            $harga;

    public function __construct($merek = "merek", $warna = "warna", $tenaga = 0, $harga = 0) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->tenaga = $tenaga;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "{$this->merek} | {$this->warna}, Tenaga : {$this->tenaga} (Rp. {$this->harga} Juta)";
    }
}

$produk1 = new Kendaraan("Toyota", "Silver", 106, 230);

$produk2 = new Kendaraan("Yamaha", "Hitam", 15, 35);

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();