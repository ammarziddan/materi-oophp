<?php 
// Overriding

class Kendaraan {
    public  $merek, 
            $warna, 
            $tenaga, 
            $harga;

    // constructor
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
    // property khusus
    public $jmlOrKapasitas;

    // overriding
    public function __construct( $merek, $warna, $tenaga, $harga, $jmlOrKapasitas = 0 ) {
        parent::__construct( $merek, $warna, $tenaga, $harga );
        $this->jmlOrKapasitas = $jmlOrKapasitas;
    }

    public function getInfoProduk() {
        return "Mobil : {$this->getLabel()}, Jumlah Kursi : {$this->jmlOrKapasitas}";
    }
}

class Motor extends Kendaraan {
    public $jmlOrKapasitas;

    public function __construct( $merek, $warna, $tenaga, $harga, $jmlOrKapasitas = 0 ) {
        parent::__construct( $merek, $warna, $tenaga, $harga );
        $this->jmlOrKapasitas = $jmlOrKapasitas;
    }

    public function getInfoProduk() {
        return "Motor : {$this->getLabel()}, Kapasitas Bagasi : {$this->jmlOrKapasitas} Liter";
    }
}

$produk1 = new Mobil("Toyota", "Silver", 106, 250, 7);
$produk2 = new Motor("Yamaha", "Hitam", 15, 35, 24);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();


?>