<?php 

// List Kendaraan
// Mobil: Merek | Warna, Tenaga: 0 hp (Rp. 250 juta). Jumlah Kursi : 0
// Motor: Merek | Warna, Tenaga: 0 hp (Rp. 35 juta). Kapasitas Bagasi : 0

class Kendaraan {
    public  $merek, 
            $warna, 
            $tenaga, 
            $harga,
            $jmlKursi,
            $kapasitasBagasi;

    // constructor
    public function __construct($merek = "merek", $warna = "warna", $tenaga = 0, $harga = 0, $jmlKursi = 0, $kapasitasBagasi = 0) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->tenaga = $tenaga;
        $this->harga = $harga;
        $this->jmlKursi = $jmlKursi;
        $this->kapasitasBagasi = $kapasitasBagasi;
    }

    public function getLabel() {
        return "{$this->merek} | {$this->warna}, Tenaga : {$this->tenaga} (Rp. {$this->harga} Juta)";
    }
}

class Mobil extends Kendaraan {
    public function getInfoProduk() {
        return "Mobil : {$this->getLabel()}, Jumlah Kursi : {$this->jmlKursi}";
    }
}

class Motor extends Kendaraan {
    public function getInfoProduk() {
        return "Motor : {$this->getLabel()}, Kapasitas Bagasi : {$this->kapasitasBagasi}";
    }
}

$produk1 = new Mobil("Toyota", "Silver", 106, 250, 7, 0);
$produk2 = new Motor("Yamaha", "Hitam", 15, 35, 0, 24);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();

// Inheritence

?>