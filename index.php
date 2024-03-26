<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $durasi,
    $tipe;

  // constructor, method yang otomatis dijalankan ketika instance object.
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $durasi = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->durasi = $durasi;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfo()
  {
    $str = "{$this->tipe}: {$this->judul} - {$this->getLabel()} | Rp{$this->harga}";
    if ($this->tipe == 'komik') {
      $str .= " - {$this->jmlHalaman} halaman.";
    } elseif ($this->tipe == 'game') {
      $str .= " ~ {$this->durasi} jam.";
    }

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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Red Dead Redemption 2", "Dan Houser", "Rockstar Games", 650000, 0, 50, "game");

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
