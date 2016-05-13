<?php
  // Inisialisasi Awal
  require 'vendor/autoload.php';

  $app = new \Slim\Slim();

  // Konfigurasi Restful API
  $app->get('/', function() {
    echo "Hello World";
  });

  $app->get('/show', function() use($app){
    echo MakananEloquent::all()->toJson();
  });
  // Menjalankan konfigurasi
  $app->run();
?>
