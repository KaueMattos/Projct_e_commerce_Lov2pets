<?php 
include 'conexao.php';
$nome = $_POST['txtnome'];
$email= $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$endere = $_POST['txtendereco'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];

$consulta = $cn->query("select emailUsu from tb_Usuario where emailUsu ='$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount() == 1){
    header("location:erro1.php");
}
else{
    $inclui = $cn->query("
    insert into tb_Usuario(nomeUsu,emailUsu,senhaUsu,UsuStatus,EndereUsu,CidadUsu,cepUsu) 
    values('$nome','$email','$senha','0','$endere','$cidade','$cep');");
    header("location:sucess.php");
}
?>