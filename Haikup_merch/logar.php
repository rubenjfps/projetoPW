<?php 
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
include('database.php');
if(isOkUsernamePassword( $email, $password )){
    $nome=getUsername($email);
    $_SESSION['nome']=$nome[0];
    
}
header("Location: index.php");
?>