<?php 

//? Jualan Produk
//? Sepatu dan Sendal
class Produk {
   public $merk = "merk",
         $bahan = "bahan",
         $warna = "warna",
         $harga = 0;

   // ? Penulisan Mwthod 
   // ? Method / function di dalam class
   public function getLabel() {
      return "$this->bahan, $this->warna";
      // ? keyword this digunakan untuk mengambil variable property 
      // ? yang ada diluar Method (  External Scope variable )
   }

}

// ? Penulisan Object baru di luar Class
// $produk1 = new Produk();
// var_dump($produk1);
// ? menimpa merk dengan merk baru
// $produk1->merk = "Brodo";
// var_dump($produk1);
// $produk2 = new Produk();
// $produk2->bahan = "Kulit";

$produk3 = new Produk();
$produk3->merk = "Brodo";
$produk3->bahan = "Kulit";
$produk3->warna = "Coklat";
$produk3->harga = 500000;
// var_dump($produk3);
// ? Cetak produk secara default
echo "Sepatu : $produk3->bahan, $produk3->warna";
echo "<br>";
// ? memanggil method getLabel yang ada di dalam class 
echo $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->merk = "Swalao";
$produk4->bahan = "Karet";
$produk4->warna = "Hijau";
$produk4->harga = 15000;
// var_dump($produk4);
// ? Cetak kedua Produk dengan memanggil method yang sama 
echo "Sepatu : " . $produk3->getLabel();
echo "<br>";
echo "Sendal : " . $produk4->getLabel();





?>