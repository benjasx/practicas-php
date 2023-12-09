<?php

$db = mysqli_connect('localhost', 'root', 'root', 'benpp');

if(!$db) {
    echo "Hubo un error";
    exit;
}