<?php

session_start();
include('conexao.php');


if(isset($_POST['usuario']) || isset($_POST['senha'])){


$logado = 'deslogado';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM `divulgadores` WHERE usuario='$usuario' AND senha='$senha'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

$pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
$sql = $pdo->prepare("SELECT * FROM `divulgadores` WHERE usuario='$usuario'");
$sql->execute();
$info = $sql->fetchAll();
foreach ($info as $key => $value) {
	 $cargo = $value['cargo'];
	 $equipe = $value['equipe'];
}

$_SESSION['usuario'] = $usuario;
$_SESSION['cargo'] = $cargo;
$_SESSION['equipe'] = $equipe;

if ($row >= 1) {
	$_SESSION['logado'] = $logado;
    echo '<script type="text/javascript">
        alert("BEM VINDO!");
        </script>';
    header('Location: PainelPROMOTER/painel_Promoter.php');
    
}
if ($row != 1) {

    session_start();
    include('conexao.php');
    
    
    if(isset($_POST['usuario']) || isset($_POST['senha'])){
    
    
        $logado = 'deslogado';
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $query = "SELECT * FROM `adms` WHERE usuario='$usuario' AND senha='$senha'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
    $sql = $pdo->prepare("SELECT * FROM `adms` WHERE usuario='$usuario'");
    $sql->execute();
    $info = $sql->fetchAll();
    foreach ($info as $key => $value) {
         $cargo = $value['cargo'];
         $equipe = $value['equipe'];
    }
    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['cargo'] = $cargo;
    $_SESSION['equipe'] = $equipe;
    
    if ($row >= 1) {
        $_SESSION['logado'] = $logado;
        echo '<script type="text/javascript">
            alert("BEM VINDO!");
            </script>';
        header('Location: PainelADM/painel_ADM.php');
        
    }else{
    echo '<script type="text/javascript">
    alert("Login Incorreto ou inexistente");
    location="login.php";
    </script>
    ';
    }}


    
}




else{

    
echo '<script type="text/javascript">
alert("Login Incorreto ou inexistente");
location="login.php";
</script>
';
}}
/*
session_start();
include('conexao.php');

$pdo = new PDO ('mysql:host=localhost;dbname=teste','root','');
$sql = $pdo->prepare("SELECT * FROM `divulgadores` WHERE senha = ''");
$sql->execute();


*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4283c9987e.js" crossorigin="anonymous"></script>
	<title>Painel Administrativo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/form.css">
<!--===============================================================================================-->
</head>
<body>


	<div id="form">
        <form method="post" action="">
            <h2 class="title">Login de divulgadores</h2>

            <label for="username">Usuário</label>
            <div class="input">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input id="username" name="usuario" placeholder="Username" type="text">
            </div>
            <label for="senha">Senha</label>
            <div class="input">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input id="senha" name="senha" placeholder="Senha" type="password">
            </div>	
            
            <div id="btn">
            <button name="entrar" type="submit">Entrar</button>
            </div>
			<div class="text-center p-t-115">
				<span class="txt1">
					Você não tem uma conta?
				</span>

				<a class="txt2" href="cadastroPROMOTER/index.php">
					Cadastre-se
				</a>
			</div>
        </form>
    </div>
</body>
</html>