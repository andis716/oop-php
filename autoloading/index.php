<?php 
require_once 'App/init.php';


$produk1 = new Sepatu( "Brodo", "Kulit", "Coklat", 500000, 6, "Garansi");
$produk2 = new Sendal("Swalao", "Karet", "Hijau", 15000, 36, "Ukuran" );
// var_dump($produk4);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();