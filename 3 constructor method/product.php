<?php 

//? Jualan Produk
//? Sepatu dan Sendal
class Produk {
   public $merk ,
         $bahan ,
         $warna ,
         $harga ;

   // ? Penulisan method constructor 
   public function __construct( $merk = "merk", $bahan = "bahan", $warna = "warna", $harga = 0 ) {
      $this->merk = $merk;
      $this->bahan = $bahan;
      $this->warna = $warna;
      $this->harga = $harga; 
   }

   // ? Penulisan Method 
   // ? Method / function di dalam class
   public function getLabel() {
      return "$this->bahan, $this->warna";
      // ? keyword this digunakan untuk mengambil variable property 
      // ? yang ada diluar Method (  External Scope variable )
   }
}

class CetakInfoProduk {
   public function cetak( Produk $produk ) {
      // ? function ini hanya menerima parameter dari class Produk dan Type Object Produk
      $str = "{$produk->merk} | {$produk->getLabel()} ( Rp.{$produk->harga})";
      return $str;
   }
}

$produk1 = new Produk( "Brodo", "Kulit", "Coklat", 500000 );
$produk2 = new Produk("Swalao", "Karet", "Hijau", 15000);
// var_dump($produk4);
// ? Cetak kedua Produk dengan memanggil method yang sama 
echo "Sepatu : " . $produk1->getLabel();
echo "<br>";
echo "Sendal : " . $produk2->getLabel();

echo"<hr>";
// ? instansiasi untuk mejalankan fungsi cetak
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1); 




?>