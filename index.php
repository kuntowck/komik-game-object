<?php

class Produk
{
  public $judul,
        $penulis,
        $penerbit,
        $harga;

  public function getLabel()
  {
    return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
  }
}


// instance object Produk
$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;

$produk2 = new Produk();
$produk2->judul = "Red Dead Redemption 2";
$produk2->penulis = "Dan Houser";
$produk2->penerbit = "Rockstar Games";
$produk2->harga = 650000;

echo "Komik: " . $produk1->getLabel();
echo "<br><br>";
echo "Games: " . $produk2->getLabel();