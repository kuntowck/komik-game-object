<?php

// interface merupakan sebuah template untuk mengimplementasi class turunannya.
interface getInfoProduk
{
  // interface tidak memiliki property
  // interface hanya memiliki minimal 1 method declaration
  public function getInfoProduk();
}

abstract class Produk
{
  // global: akses global
  // protected: akses parent dan child
  // private: akses class tertentu
  protected $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

  // constructor, method yang otomatis dijalankan ketika instance object.
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon()
  {
    return $this->diskon;
  }

  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getLabel()
  {
    return "{$this->penulis}, {$this->penerbit}";
  }

  abstract public function getInfo();
}


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

// instance object Produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Red Dead Redemption 2", "Dan Houser", "Rockstar Games", 650000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
