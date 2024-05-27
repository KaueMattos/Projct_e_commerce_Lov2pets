<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>   
</head>
<body>
<?php 
    include 'conexao.php';  
    $consulta = $cn->query('select * from vw_camisetas');
    while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){

    echo $exibe['nm_camiseta'] . '<br>';
    echo $exibe['vl_preco']  . '<br>';
    echo $exibe['ds_roupa']  . '<br>';
    echo '<hr>';
    }
?>



</body>
</html>