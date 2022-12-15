<?php
include __DIR__ . '/../database/index.php';

// var_dump( __DIR__ );

header('Content-type: application/json');

echo json_encode($database);
?>

