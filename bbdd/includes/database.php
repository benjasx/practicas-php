<?php
require 'credenciales.php';
$db = mysqli_connect($HOST,$USR,$PASS,$BBDD);

if(!$db) {
    echo "Hubo un error";
    exit;
}