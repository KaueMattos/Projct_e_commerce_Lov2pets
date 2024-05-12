<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "" ;
    $banco = "bdLov2pets";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>