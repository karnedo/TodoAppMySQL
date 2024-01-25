<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$connection =mysqli_connect('192.168.1.71','yosoyroot','MANAGER','productosdb');
if(!$connection){
    echo "connection error";
}

?>
