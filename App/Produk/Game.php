<?php

// inheritance menggunakan keyword extends.
// mendapatkan fungsionalitas dari class parent, yaitu property dan method.
class Game extends Produk implements getInfoProduk
{
   public $durasi;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasi = 0)
   {
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->durasi = $durasi;
   }

   public function getInfo()
   {
      $str = "{$this->judul} - {$this->getLabel()} | Rp{$this->harga}";

      return $str;
   }

   public function getInfoProduk()
   {
      // overriding menggunakan method static untuk mengambil method dari class parent.
      $str = "Game: " . $this->getInfo() . " - {$this->durasi} jam.";

      return $str;
   }
}
