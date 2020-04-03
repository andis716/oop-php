<?php 

//? Jualan Produk
//? Sepatu dan Sendal
class Produk {
   public $merk ,
         $bahan ,
         $warna ;
   protected $diskon = 0;

   private $harga ;

   // ? Penulisan method constructor 
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", $harga = 0 ) {
      $this->merk = $merk;
      $this->bahan = $bahan;
      $this->warna = $warna;
      $this->harga = $harga; 
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
   public function getInfoProduk() {
      $str = "{$this->merk} | {$this->getLabel()} ( Rp.{$this->harga})";
      return $str;
   }
}

class Sepatu extends Produk {
   public $garansi;
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", $harga = 0, $garansi = 0 ) {
      parent::__construct(  $merk, $bahan, $warna, $harga );
      $this->garansi = $garansi; 
   }
   
   public function getInfoProduk() {
      $str = "Sepatu : " . parent::getInfoProduk(). " - {$this->garansi} Garansi";
      return $str;
   }
}

class Sendal extends Produk {
   public $ukuran;
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", $harga = 0, $ukuran = 0 ) {
      parent::__construct(  $merk, $bahan, $warna, $harga );
      $this->ukuran = $ukuran;
   }

   public function getInfoProduk() {
      $str = "Sendal : " .  parent::getInfoProduk() . " ~ {$this->ukuran} Ukuran";
      return $str;
   }

   public function setDiskon( $diskon ) {
      return $this->diskon = $diskon ;

   }
}

$produk1 = new Sepatu( "Brodo", "Kulit", "Coklat", 500000, 6, "Garansi");
$produk2 = new Sendal("Swalao", "Karet", "Hijau", 15000, 36, "Ukuran" );
// var_dump($produk4);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
?>