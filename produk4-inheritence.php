<?php 
// Inheritence

class Produk {
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga},-) ";
        if( $this->tipe == "Komik" ) {
            return $str .= "- {$this->jmlHalaman} Halaman";
        } else if( $this->tipe == "Game" ) {
            return $str .= "~ {$this->waktuMain} Jam";
        }
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) { 
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga},-)";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kashimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

// hapus bagian echo

// coba tampilin:
// Komik: Naruto | Masashi Kashimoto, Shonen Jump (Rp 30000,-) - 100 halaman
// Game: Uncharted | Neil Druckman, Sony Computer (Rp 250000,-) ~ 50 jam

echo $produk1->getInfoLengkap();
echo "<hr>";
echo $produk2->getInfoLengkap();






// Urutan: 47, 49-51, 44&45, 9-11, 13-20, 27-34