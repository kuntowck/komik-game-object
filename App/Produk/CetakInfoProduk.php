<?php

class CetakInfoProduk
{
  public $daftarProduk = [];

  // object type untuk menspesifikasi parameter menggunakan object sebagai tipe data
  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }

  public function cetak()
  {
    $str = "Daftar Produk: <br>";

    foreach ($this->daftarProduk as $produk) {
      $str .= "- {$produk->getInfo()} <br>";
    }

    return $str;
  }
}