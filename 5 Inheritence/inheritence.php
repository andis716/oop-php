<?php 

//? Jualan Produk
//? Sepatu dan Sendal
class Produk {
   public $merk ,
         $bahan ,
         $warna ,
         $harga ,
         $garansi,
         $ukuran;

   // ? Penulisan method constructor 
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", 
   $harga = 0, $garansi = 0, $ukuran = 0) {
      $this->merk = $merk;
      $this->bahan = $bahan;
      $this->warna = $warna;
      $this->harga = $harga; 
      $this->garansi = $garansi;
      $this->ukuran = $ukuran;
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
   public function getInfoSepatu() {
      $str = "Sepatu : {$this->merk} | {$this->getInfoProduk()} - {$this->garansi} Garansi";
      return $str;
   }
}

class Sendal extends Produk {
   public function getInfoSendal() {
      $str = "Sendal : {$this->merk} | {$this->getInfoProduk()} ~ {$this->ukuran} Ukuran";
      return $str;
   }
}

$produk1 = new Sepatu( "Brodo", "Kulit", "Coklat", 500000, 6, 0, "Garansi");
$produk2 = new Sendal("Swalao", "Karet", "Hijau", 15000, 0, 36, "Ukuran" );
// var_dump($produk4);


echo $produk1->getInfoSepatu();
echo "<br>";
echo $produk2->getInfoSendal();



?>