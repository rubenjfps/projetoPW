<?php 
include('database.php');
$nome=$_POST['nome'];
$email=$_POST['email'];
$password=$_POST['password'];
$morada=$_POST['morada'];
$codpostal=$_POST['codpostal'];
$telefone=$_POST['telefone'];
   adicionarUser( $nome, $email, $password, $morada, $codpostal, $telefone);
   header("Location: index.php");
?>