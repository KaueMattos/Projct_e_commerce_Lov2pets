<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanBlack</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        .navbar{
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<?php 

session_start();
include 'conexao.php';
include 'nav.php';
include 'cabecario.html';

$consulta = $cn->query('select cd_Racao, nm_Racao ,vl_preco,ds_Racao,ds_img,qt_estoque from vw_Racoes;');
?>


<div class="container-fluid">
    <div class="row">
    <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-sm-3">
        <img src="https://raw.githubusercontent.com/KaueMattos/Projct_e_commerce_Lov2pets/main/imagens/<?php echo $exibe['ds_img']; ?>.jpg" class="img-responsive" style="width:100%;" alt="">
        <div><h4><b><?php echo mb_strimwidth($exibe['nm_Racao'], 0,25,'...'); ?></b></h4></div>
        <div><h5>R$ <?php echo number_format($exibe['vl_preco'], 2,',','.'); ?></h5></div>

        <div class="text-center" style="margin-top: 5px; margin-bottom:5px;">
        <a href="detalhes.php?cd=<?php echo $exibe['cd_Racao'];?>">
            <button class="btn btn-lg btn-block text-muted">
                <span class="glyphicon glyphicon-info-sign"> Detalhes</span>
            </button>
        </a>
        </div>
        <?php 
        if($exibe['qt_estoque'] == 0){?>
            <button class="btn btn-lg btn-block btn-danger" disabled>
            <span class="glyphicon glyphicon-usd"> Indesponível</span>
        </button>
        <?php } 
         else{ ?>
        <button class="btn btn-lg btn-block" style="background-color:#000000;color:#fff">
            <span class="glyphicon glyphicon-remove-circle"> Comprar</span>
        </button>
        <?php }?>
        

        </div>        
    <?php } ?>  
    </div>
</div>
<?php include 'rodape.html';?>
</body>
</html>