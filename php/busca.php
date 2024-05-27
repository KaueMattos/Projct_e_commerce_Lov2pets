<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>PanBlack</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://kit.fontawesome.com/f3e76744a2.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/css.css">  
	
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	
	if(empty($_GET['txtPesquisar'])){
        echo "<html><script>location.href='index.php'</script></html>";
    }
	$pesquisa  = $_GET['txtPesquisar'];
    $consulta = $cn ->query("select * from vw_Racoes where nm_Racao like concat ('%','$pesquisa','%') or nm_marca like  
    concat ('%','$pesquisa','%');");
    if($consulta->rowCount() == 0){
        echo "<html><script>location.href='erro2.php'</script></html>";
    }
	?>
	
<div class="container-fluid">
	
	
<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><img src="https://raw.githubusercontent.com/KaueMattos/Projct_e_commerce_Lov2pets/main/imagens/<?php echo $exibe['ds_img']; ?>.jpg" class="img-responsive"></div>
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['nm_Racao']?></h4></div>
		<div class="col-sm-2"><h4 style="padding-top:20px">Preço: R$<?php echo number_format($exibe['vl_preco'], 2,',','.');?> </h4></div>
		<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">

        <a href="detalhes.php?cd=<?php echo $exibe['cd_Racao'];?>">
            <button class="btn btn-lg btn-block btn-default">				
                <span class="glyphicon glyphicon-info-sign"> Detalhes</span>
            </button>
        </a>
		
		
		
		</div> 
				
	</div>	
    <?php }?>	
	

	
</div>
	
	<?php
	
	include '../html/rodape.html';
	
	?>
	
</body>
</html>