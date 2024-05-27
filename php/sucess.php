
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Panblack - Logon de usuário</title>
	
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
	
	include 'conexao.php';	
	include 'nav.php';
	include '../html/cabecario.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Usuário Cadastrado com sucesso!!</h2>
				
				<a href="formlogon.php" class="btn btn-block btn-info" role="button">Entrar na loja</a>
				
				
							
			</div>
		</div>
	</div>
	
	<?php include '../html/rodape.html' ?>
	
	
	
	
</body>
</html>