<?php 
define ( 'HOSTNAME',  'localhost:3308');
define ( 'DATABASE', 'haikupmerch');
define ( 'USERNAME', 'root');
define ( 'USER_PASSWORD', '');


function estabelecerConexao()
{
    try
    {
    $conexao = new PDO( "mysql:host=".HOSTNAME.";dbname=".DATABASE, USERNAME, USER_PASSWORD );
    }
    catch ( PDOException $e)
    {
        trigger_error($e->getMessage(), E_USER_ERROR);
    }

    // Always set it this way, after creation of PDO instance
    // The only proper error handling modes is PDO::ERRMODE_EXCEPTION. 
    $conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
    return $conexao;  
}

function isOkUsernamePassword( $email, $password )
{
	$con = estabelecerConexao();
	$stmt = $con->prepare("SELECT email, password FROM users 
                           WHERE email=:email AND password=:password
	                      ");
	$stmt->execute( [ 'email' => $email, 
					  'password' => $password 	
				    ] );

    if( $stmt->fetchColumn() )
        return true;
    else
        return false;
	
} 
function getUsername($email)
{
	$con = estabelecerConexao();
	$stmt = $con->prepare("SELECT nome FROM users 
                           WHERE email=:email
	                      ");
	$stmt->execute( [ 'email' => $email, 	
				    ] );

    $username=$stmt->fetchAll(PDO::FETCH_COLUMN);
    return $username;
	
} 

function adicionarUser( $username, $email, $password, $morada, $codPostal, $telefone )
{
	$con = estabelecerConexao();
	$stmt = $con->prepare("INSERT INTO users (nome, email, password, morada, codPostal, telefone)
	                       VALUES (:nome, :email, :password, :morada, :codPostal, :telefone)");
	$stmt->execute( [ 'nome' => $username, 
					  'email' => $email,
                      'password' => $password,
                      'morada' => $morada,
                      'codPostal' => $codPostal,
                      'telefone' => $telefone 	
				    ] );
	
} 
function getProdutos()
{
    $con = estabelecerConexao();
    $stmt = $con->query("SELECT codProduto, nomeProduto, preco FROM produtos");
   
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $produtos;      
} 

?>