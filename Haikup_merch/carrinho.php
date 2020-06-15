<?php
session_start();
if(!isset($_SESSION['carrinho'])){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$carrinho=$_SESSION['carrinho'];
$nome="";
if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\carrinho.css">
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5db74112ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu">
        <div class="menuItems">
            <a href="index.php">
            <img src="logos\haikup_logo_menu.png">
            </a>
            <span class="icon_menu">
                <a><?php echo $nome; ?> <a>
                <a href="login.php" class="fas fa-user"><a>
                <a href="carrinho.php" class="fas fa-shopping-cart"></a>
        </span>
        </div>
    </div>

    <div class="container">
    <?php
    $precoTotal=0; 
    foreach($carrinho as $key =>$value){
        $codProduto=$value['codProduto'];
        $nomeProduto=$value['nomeProduto'];
        $preco=$value['preco'];
        $tamanho=$value['tamanho'];
        $precoTotal+=$preco;
    ?>
       <div class="linhas">
           <div class="colunaImg"><img src="roupa\<?php echo $codProduto ?>.png" alt=""></div>
           <div class="colunas"><span><?php echo $nomeProduto ?> </span></div>
           <div class="colunas"><span><?php echo $preco ?>€</span></div>
       </div>
       <?php 
       }
       ?>
            <div class="linhas">
           <div class="colunaImg"><span></span></div>
           <div class="colunas"><span>total:</span></div>
           <div class="colunas"><span><?php echo $precoTotal ?>€</span></div>
       </div>
       <div class="finalizar">
       <a href="finalizar.php">Finalizar Compra</a>
       <a href="limparCarrinho.php">Limpar Carrinho</a>
       </div>
    </div>
   
</body>
</html>