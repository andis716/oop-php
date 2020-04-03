<?php

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