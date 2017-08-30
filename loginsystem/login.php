<?php



$con = new mysqli('localhost','root','marcos123');
mysqli_select_db($con, 'usuarios');

$login = mysqli_real_escape_string($con, $_POST['login']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$select_user= "SELECT * FROM logins WHERE login ='$login' AND senha = '$senha'" or die("ERRO NA BUSCA");

$run_user= mysqli_query($con, $select_user);
$check_user = mysqli_num_rows($run_user);
if($check_user>0){
    echo "logado";
} else {
    echo "Não logado";
}



