<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $durasi;

  // constructor, method yang otomatis dijalankan ketika instance object.
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $durasi = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->durasi = $durasi;
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

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik: {$this->judul} - {$this->getLabel()} | Rp{$this->harga} - {$this->jmlHalaman} halaman.";

    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game: {$this->judul} - {$this->getLabel()} | Rp{$this->harga} - {$this->durasi} jam.";

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
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0,);
$produk2 = new Game("Red Dead Redemption 2", "Dan Houser", "Rockstar Games", 650000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
