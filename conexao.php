<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "contrato";
$port = '';

try{
    $conn = new PDO ("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    // echo "Conxao suceso";
}catch(PDOException $err){
    echo "Erro: Conexão com bd não realizada";

}