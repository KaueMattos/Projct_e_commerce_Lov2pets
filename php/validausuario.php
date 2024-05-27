<?php 
include 'conexao.php';

session_start();

$Vemail = $_POST['txtEmail'];
$Vsenha = $_POST['txtSenha'];

//echo $Vemail;
//echo $Vsenha;

$consulta = $cn->query("select idUsua, nomeUsu, emailUsu, senhaUsu, UsuStatus from tb_Usuario
where emailUsu = '$Vemail' and senhaUsu = '$Vsenha'");

if($consulta->rowCount() == 1){
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
    if($exibeUsuario["UsuStatus"] == "0"){
    $_SESSION['ID'] = $exibeUsuario['idUsua'];
    $_SESSION['Status']=0;
    header('location:index.php');
    }
    else{
        $_SESSION['ID'] = $exibeUsuario['idUsua'];
        $_SESSION['Status']=1;
        header('location:index.php');
    }
}
else{
    header('location:erro.php');
}
?>

