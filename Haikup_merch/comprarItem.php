<?php 
include('database.php');
session_start();
$nome="";
if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
}
$codProduto=$_GET['codProduto'];
$nomeProduto=$_GET['nomeProduto'];
$preco=$_GET['preco'];
//print_r($nome);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\comprarItem.css">
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
                <a href="carrinho.php"class="fas fa-shopping-cart"></a>
        </span>
        </div>
    </div>
    <h1><?php echo $nomeProduto?></h1>
    <div class="main">
        <div class="imagemConteudo">
        <img src="roupa\<?php echo $codProduto?>.png">
        </div>
        <div class="conteudo">
            <label>Descrição</label>
            <p>Roupa cem porcento algodão para garantir a máxima qualidade
            da tua merch favorita.</p>
            <div class="formulario">
                <form action="adicionarAoCarrinho.php?codProduto=<?php echo $codProduto?>&nomeProduto=<?php echo $nomeProduto?>&preco=<?php echo $preco?>">
                    <label>Tamanhos:</label>
                    <div class="tamanhos">
                        <div class="inputsTamanhos">
                        <input type="radio" name="tamanho" value="S" required>S</input>
                        </div>
                        <div class="inputsTamanhos">
                        <input type="radio" name="tamanho" value="M" required>M</input>
                        </div>
                        <div class="inputsTamanhos">
                        <input type="radio" name="tamanho" value="L" required>L</input>
                        </div>
                        <div class="inputsTamanhos">
                        <input type="radio" name="tamanho" value="XL" required>XL</input>
                        </div>
                    </div>
                    <span id="preco"><?php echo $preco?>€</span>
                    <input type="hidden" name="codProduto" value="<?php echo $codProduto?>">
                    <input type="hidden" name="nomeProduto" value="<?php echo $nomeProduto?>">
                    <input type="hidden" name="preco" value="<?php echo $preco?>">
                    <input id="inputSubmeter" type="submit" value="Adicionar ao carrinho">
                </form>
            </div>
        </div>
    </div>
</body>
</html>