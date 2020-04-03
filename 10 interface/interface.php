<?php 

interface InfoProduk {
   public function getInfoProduk();
}


//? Jualan Produk
//? Sepatu dan Sendal
abstract class Produk {
   protected $merk ,
         $bahan ,
         $warna ,
         $diskon,
         $harga ;

   // ? Penulisan method constructor 
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", $harga = 0 ) {
      $this->merk = $merk;
      $this->bahan = $bahan;
      $this->warna = $warna;
      $this->harga = $harga; 
   }

   public function setMerk($merk) {
      $this->merk = $merk;
   }
   public function getMerk() {
      return $this->merk;
   }
   public function setBahan($bahan) {
      $this->bahan = $bahan;
   }
   public function getBahan() {
      return $this->bahan;
   }
   public function setWarna($warna) {
      $this->warna = $warna;
   }
   public function getWarna() {
      return $this->merk;
   }
   public function getDiskon() {
      return $this->diskon;
   }
   public function setDiskon( $diskon ) {
      return $this->diskon = $diskon ;

   }

   public function getHarga() {
      return $this->harga - ( $this->harga * $this->diskon / 100 );
   }
   // ? Penulisan Method 
   // ? Method / function di dalam class
   public function getLabel() {
      return "$this->bahan, $this->warna";
      // ? keyword this digunakan untuk mengambil variable property 
      // ? yang ada diluar Method (  External Scope variable )
   }
   abstract public function getInfo();

}

class Sepatu extends Produk implements InfoProduk {
   public $garansi;
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", $harga = 0, $garansi = 0 ) {
      parent::__construct(  $merk, $bahan, $warna, $harga );
      $this->garansi = $garansi; 
   }

   public function getInfo () {
      $str = "{$this->merk} | {$this->getLabel()} ( Rp.{$this->harga})";
      return $str;
   }

   public function getInfoProduk() {
      $str = "Sepatu : " . $this->getInfo(). " - {$this->garansi} Garansi";
      return $str;
   }
}

class Sendal extends Produk implements InfoProduk {
   public $ukuran;
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", $harga = 0, $ukuran = 0 ) {
      parent::__construct(  $merk, $bahan, $warna, $harga );
      $this->ukuran = $ukuran;
   }
   public function getInfo () {
      $str = "{$this->merk} | {$this->getLabel()} ( Rp.{$this->harga})";
      return $str;
   }
   public function getInfoProduk() {
      $str = "Sendal : " .  $this->getInfo() . " ~ {$this->ukuran} Ukuran";
      return $str;
   }

}

class CetakInfoProduk {

   public $daftarProduk = array();

   public function tambahProduk( Produk $produk ) {
      $this->daftarProduk[] = $produk;
   }

   public function cetak(  ) {
      $str = "DAFTAR PRODUK : <br>";
   

      foreach( $this->daftarProduk as $p ) {
         $str .= "- {$p->getInfoProduk()} <br>";
      }

      return $str;
   }
}

$produk1 = new Sepatu( "Brodo", "Kulit", "Coklat", 500000, 6, "Garansi");
$produk2 = new Sendal("Swalao", "Karet", "Hijau", 15000, 36, "Ukuran" );
// var_dump($produk4);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>