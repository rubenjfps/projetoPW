<?php

session_start();
if(isset($_SESSION['nome'])){
    unset($_SESSION['carrinho']);
    header("Location: index.php");
}
else{
    header("Location: login.php"); 
}

?>