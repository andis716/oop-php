<?php 

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