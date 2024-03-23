<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  // constructor merupakan method yang otomatis dijalankan ketika instance object.
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
  }
}


// instance object Produk
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Red Dead Redemption 2", "Dan Houser", "Rockstar Games", 650000);

echo "Komik: " . $produk1->getLabel();
echo "<br><br>";
echo "Games: " . $produk2->getLabel();
