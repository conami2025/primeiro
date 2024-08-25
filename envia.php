<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="enviar" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
</head>
<body>
<?php   
$conexao = mysqli_connect("localhost","root","","conami");
//Checar conexao
if(!$conexao){
echo"NAO CONECTADO";
}
echo"CONECTADO AO BANCO>>>>>>>>>>>";

//RECUPERAR E FERIFICAR SE CPF JA ESTA CADASTRADO
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao, $cpf);
$sql = "SELECT cpf FROM conami.dados WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao,$sql);

if(mysqli_num_rows($retorno)>0){
    echo"CPF JA CADASTRADO!!!<br>";
}else{

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "INSERT INTO conami.dados(cpf,nome,idade) values('$cpf','$nome','$idade')";
$resultado = mysqli_query($conexao, $sql);
echo">>>REGISTRO CADASTRADO COM SUCESSO!<BR>";
}
?>
</body>
</html>