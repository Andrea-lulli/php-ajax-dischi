<?php
include __DIR__ . '/../database/index.php';

// var_dump( __DIR__ );

$arrayGenereFiltrato = [];


if( !empty($_GET) && !empty($_GET['genre'] ) ){

  foreach( $database as $elem ){
    
    if( $elem['genre'] == $_GET['genre'] ){
     
      $arrayGenereFiltrato[] = $elem;
    }
  }


} else {

  $arrayGenereFiltrato = $database;
}


header('Content-type: application/json');

echo json_encode($arrayGenereFiltrato);
?>

