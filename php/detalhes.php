<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Panblack</title>
	
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
	if(!empty($_GET['cd'])){
    $cd_Racao = $_GET['cd'];
	$consulta = $cn ->query("select * from vw_Racoes where cd_Racao = '$cd_Racao' ");
    $exibe = $consulta -> fetch(PDO::FETCH_ASSOC);
}else{
	header("location:index.php");
}

	?>
	
<div class="container-fluid">
	
	
	
	<div class="row">
		
		 <div class="col-sm-4 col-sm-offset-1">
			 
			 <h1>Detalhes do Produto</h1>
			 
			 <img src="https://raw.githubusercontent.com/KaueMattos/Projct_e_commerce_Lov2pets/main/imagens/<?php echo $exibe['ds_img'];?>.jpg" class="img-responsive" style="width:100%;">
		
				<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="https://raw.githubusercontent.com/KaueMattos/Projct_e_commerce_Lov2pets/main/imagens/<?php echo $exibe['ds_img']; ?>.jpg" class="img-responsive"></div>
				<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="https://raw.githubusercontent.com/KaueMattos/Projct_e_commerce_Lov2pets/main/imagens/<?php echo $exibe['ds_img']; ?>.jpg" class="img-responsive"></div>
			
		</div>
		
		

		<div class="col-sm-7">
		<h1><?php echo $exibe['nm_marca'];?></h1>	
		<h1><?php echo $exibe['nm_Racao']; ?></h1>
		
		<p><?php echo $exibe['ds_Racao'];?></p>
		
		
		
		<p><b>Preço:</b> R$<?php echo number_format($exibe['vl_preco'], 2,',','.');?></p>
			 
			 
		<?php 
        if($exibe['qt_estoque'] == 0){?>
            <button class="btn btn-lg btn-danger" disabled>
            <span class="glyphicon glyphicon-usd"> Indesponível</span>
        </button>
        <?php } 
         else{ ?>
        <button class="btn btn-lg " style="background-color:#ce2020;color:#fff">
			<i class="fa-solid fa-cart-shopping"></i>
            <span>Comprar</span>
        </button>
        <?php }?>
		
				
		</div>		
	

	
</div>
	
	<?php
	
	include '../html/rodape.html';
	
	?>
	
</body>
</html>