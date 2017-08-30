<?php

$login=$_POST['login'];
$senha= $_POST['senha'];

$con = mysqli_connect('localhost', 'root', 'marcos123', 'usuarios') or die('ERRO NA CONEXÃO');

$sql = "INSERT INTO logins (login,senha) VALUES ('$login','$senha')";

mysqli_query($con, $sql) or die('ERRO AO CADASTRAR');
mysqli_close($con);

echo 'CADASTRO EFETUADO COM SUCESSO! <a href="login.html">login</a>';