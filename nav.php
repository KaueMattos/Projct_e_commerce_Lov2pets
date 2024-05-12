<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PanBlack</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="lanc.php">Lançamentos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="marcas.php?marc=Kace">Kace</a></li>
            <li><a href="marcas.php?marc=Thunder God Co">Thunder God Co</a></li>
            <li><a href="marcas.php?marc=Ciena">Ciena</a></li>
            <li><a href="marcas.php?marc=Nephew">Nephew</a></li>
            <li><a href="marcas.php?marc=Adidas">Adidas</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left" role="search" name="frmPesquisa" method="get" action="busca.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar" name="txtPesquisar">
        </div>
        <button type="submit" class="btn btn-default">Pesquisa</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contato</a></li>
        <?php if(empty($_SESSION['ID'])) {?>
        <li><a href="formlogon.php"><span class="glyphicon glyphicon-log-in"> Logon</a></span></li>
        <?php } else{

          if($_SESSION['Status'] == 0){
            $consulta_usuario = $cn->query("select nomeUsu from tb_Usuario
            where idUsua = '$_SESSION[ID]'");
            $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);

          ?>

   <li><a href="#"><span class="glyphicon glyphicon-user"><?php echo $exibe_usuario['nomeUsu']; ?></a></span></li>
   <li><a href="sair.php"><span class="glyphicon glyphicon-log-out">Exit</a></span></li>

   <?php } else{
           $consulta_usuario = $cn->query("select nomeUsu from tb_Usuario
           where idUsua = '$_SESSION[ID]'");
           $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);?>
             <li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
             <li><a href="sair.php"><span class="glyphicon glyphicon-log-out">Exit</a></span></li>

   <?php } }?>
 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>