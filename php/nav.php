<input type="checkbox" id="check">
<nav>
   
        <div class="logo">
            <a href="index.php"><img src="../imagens/LogoLov.png" alt=""></a>
        </div>
    

    <form role="search" name="frmPesquisa" method="get" action="busca.php">
    <div class="search_box">
        <input type="text" placeholder="Pesquisar" name="txtPesquisar">
        <button type="submit">
            <span class="fa fa-search"></span>
        </button>
    </div>
    </form>

    <ol>
   
        <li><a href="index.php">Home</a></li>
        <li><a href="lanc.php">Lançamentos</a></li>
        <li><a href="#">Contato</a></li>
        
        <?php if(empty($_SESSION['ID'])) {?>
        <li><a href="formlogon.php">Login</a></li>

        <?php } else{
            if($_SESSION['Status'] == 0){
                $consulta_usuario = $cn->query("select nomeUsu from tb_Usuario
                where idUsua = '$_SESSION[ID]'");
                $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
            
        ?>

        <div class="box">
            <i class="fa-solid fa-circle-user fa-2x" style="color: #ce2020;"></i>
            <li><a class="textcolor" href="#"><?php echo $exibe_usuario['nomeUsu']; ?></a></li>
        </div>

        <li><a href="sair.php">Exit</a></li>

        <?php } else{
           $consulta_usuario = $cn->query("select nomeUsu from tb_Usuario
           where idUsua = '$_SESSION[ID]'");
           $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);?>

            <div class="box">
                <i class="fa-solid fa-shield-dog fa-2x" style="color: #ce2020;"></i>
                <li><a class="textcolor" href="adm.php">Administrador</a></li>
            </div>
            <li><a href="sair.php">Exit</a></li>

        <?php } }?>      
        
    </ol>
        <label for="check" class="bar">             
                <span class="fa fa-bars" id="bars"></span>
                <span class="fa fa-times" id="times"></span>            
        </label>
</nav> 
