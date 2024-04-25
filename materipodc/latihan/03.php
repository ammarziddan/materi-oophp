<?php 

// Overriding

// List Produk Kendaraan
// Mobil: Merek | Warna, Tenaga: 0 hp (Rp. 0). Jumlah Kursi : 7
// Motor: Merek | Warna, Tenaga: 0 hp (Rp. 0). Kapasitas Bagasi : 24

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

class Mobil extends Kendaraan {
    public $jmlKursi;

    public function __construct($merek = "merek", $warna = "warna", $tenaga = 0, $harga = 0, $jmlKursi = 0) {
        parent::__construct($merek, $warna, $tenaga, $harga);
        $this->jmlKursi = $jmlKursi;
    }

    public function getInfoLengkap() {
        return "{$this->getLabel()}. Jumlah Kursi : {$this->jmlKursi}";
    }
}

class Motor extends Kendaraan {
    public $kapasitasBagasi;

    public function __construct($merek = "merek", $warna = "warna", $tenaga = 0, $harga = 0, $kapasitasBagasi = 0) {
        parent::__construct($merek, $warna, $tenaga, $harga);
        $this->kapasitasBagasi = $kapasitasBagasi;
    }

    public function getInfoLengkap() {
        return "{$this->getLabel()}. Kapasitas Bagasi : {$this->kapasitasBagasi} Liter";
    }
}

$produk1 = new Mobil("Toyota", "Silver", 106, 230, 7);
$produk2 = new Motor("Yamaha", "Hitam", 15, 35, 24);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();