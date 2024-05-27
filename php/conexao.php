<?php 
    $servidor = "kmdvzin-bd.cv6kiuiwoia6.us-east-1.rds.amazonaws.com";
    $usuario = "Kmdvzin";
    $senha = "kaka35343772" ;
    $banco = "bdLov2pets";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>