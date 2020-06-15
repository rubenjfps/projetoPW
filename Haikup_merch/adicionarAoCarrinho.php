<?php 
session_start();
if(empty($_GET['codProduto'])){
    header('Location:index.php');
}
else{
$codProduto=$_GET['codProduto'];
$nomeProduto=$_GET['nomeProduto'];
$preco=$_GET['preco'];
$tamanho=$_GET['tamanho'];

$produtos = array(
    "codProduto"=>$codProduto,
    "nomeProduto" => "$nomeProduto", 
    "preco" => "$preco", 
    "tamanho" => "$tamanho",
    "quantidade"=>1
);

if(isset($_SESSION['carrinho'])){
    $arrayprodutos=$_SESSION['carrinho'];
    array_push($arrayprodutos,$produtos);
}
else{
    $arrayprodutos=array();
    array_push($arrayprodutos,$produtos);
}
echo "<pre>";
print_r($arrayprodutos);
echo "</pre>";
$_SESSION['carrinho']=$arrayprodutos;
header("Location: carrinho.php");
}
?>