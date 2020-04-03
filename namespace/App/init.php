<?php 

// require_once 'produk/InfoProduk.php';
// require_once 'produk/Produk.php';
// require_once 'produk/Sepatu.php';
// require_once 'produk/Sendal.php';
// require_once 'produk/CetakInfoProduk.php';

spl_autoload_register(function($class){
   $class = explode('\\', $class );
   $class = end($class);
   require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class){
   $class = explode('\\', $class );
   $class = end($class);
   require_once __DIR__ . '/Service/' . $class . '.php';
});