<?php 

class ContohStatic {
   // ? penulisan property dengan keword static
   public static $angka = 1;
   // ? penulisan metho dengan keyword static
   public static function hallo() {
      return "Hallo." . self::$angka;
      // ? keyword self:: digunkan untuk memanggil property static
   }
}

// ? instansiasi 
echo ContohStatic::$angka;
echo "<br>";
// ? memanggil method static
echo ContohStatic::hallo();