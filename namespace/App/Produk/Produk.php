<?php 

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