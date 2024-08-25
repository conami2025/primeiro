<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>cadastro-envio</title>
</head>
<body>
<?php 
$conexao = mysqli_connect("localhost","root","","2025-conami"); 
///checar conexao//
if(!$conexao){
echo "Nao conectado";
}
echo "Conectado ao banco>>>>>>>>>>>>>>>>      ";

//Recuperar CPF e conferir se ja esta cadastrado///
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao,$cpf);
$sql = "SELECT cpf from 2025-conami.cadastro where cpf='$cpf'";
$retorno = mysqli_query($conexao,$sql);

if (mysqli_num_rows($retorno)>0){
echo "CPF ja cadastrado<br>";
}else
{

$cpf   = $_POST ['cpf'];
$idade = $_POST ['idade'];
$nome  = $_POST ['nome'];

$sql = "INSERT INTO 2025-conami.cadastro (cpf,idade,nome) values ('$cpf','$idade','$nome')";
$resultado = mysqli_query($conexao, $sql);
echo "Registro cadastrado com sucesso!<br>";
}
?>
</body>
</html>