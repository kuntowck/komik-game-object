<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  // constructor, method yang otomatis dijalankan ketika instance object.
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} - {$this->getLabel()} | Rp{$this->harga}";

    return $str;
  }
}


// inheritance menggunakan keyword extends.
// mendapatkan fungsionalitas dari class parent, termasuk property dan method.
class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    // overriding menggunakan methodstatic untuk mengambil method dari class parent.
    $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";

    return $str;
  }
}

class Game extends Produk
{
  public $durasi;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $durasi = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->durasi = $durasi;
  }

  public function getInfoProduk()
  {
    // overriding menggunakan method static untuk mengambil method dari class parent.
    $str = "Game: " . parent::getInfoProduk() . " - {$this->durasi} jam.";
    
    return $str;
  }
}

class CetakInfoProduk
{
  // object type untuk menspesifikasi parameter menggunakan object sebagai tipe data
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} - {$produk->getLabel()} | Rp{$produk->harga}";
    return $str;
  }
}

// instance object Produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Red Dead Redemption 2", "Dan Houser", "Rockstar Games", 650000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
