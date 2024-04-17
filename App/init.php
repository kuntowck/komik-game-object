<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';


spl_autoload_register(function ($class) {
   // $path = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

   // if (file_exists($path)){
   //    require $path;

   //    return true;
   // }
   require_once 'Produk/' . $class . '.php';
});


// function loadModel($class)
// {
//    $path = 'Produk/' . $class . '.php';

//    if (file_exists($path)) require $path;
// }

// spl_autoload_register('loadModel');