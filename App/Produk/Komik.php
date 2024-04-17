<?php

// inheritance menggunakan keyword extends.
// mendapatkan fungsionalitas dari class parent, yaitu property dan method.
class Komik extends Produk implements getInfoProduk
{
  public $jmlHalaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfo()
  {
    $str = "{$this->judul} - {$this->getLabel()} | Rp{$this->harga}";

    return $str;
  }

  public function getInfoProduk()
  {
    // overriding menggunakan methodstatic untuk mengambil method dari class parent.
    $str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";

    return $str;
  }
}