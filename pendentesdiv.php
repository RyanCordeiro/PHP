<?php
session_start();
if(!$_SESSION['logado']){
    header('Location: login.php');
}
$usuario = $_SESSION['usuario'];

$equipe = $_SESSION['equipe'];
//-------------------EQUIPE--------------------//

if($equipe === "GRUPO 1"){
    $equipe = "Fênix";
}

if($equipe === "GRUPO 2"){
    $equipe = "Revoada";
}

if($equipe === "GRUPO 3"){
    $equipe = "Los Magos";
}

if($equipe === "GRUPO 4"){
    $equipe = "Embrazados";
}

//-------------------CARGO---------------------//
$cargo = $_SESSION['cargo'];
if($cargo == "1"){
     $cargo = "Fundador";
}

if($cargo == "2"){
     $cargo = "Líder";
}

if($cargo == "3"){
     $cargo = "Vice Líder";
}

if($cargo == "4"){
     $cargo = "Assistente";
}

include('conexao.php');{

    
    /*
    $pdo = new PDO('mysql:host=localhost;dbname=teste','root','');
    $sql = $pdo->prepare("SELECT * FROM `divulgaçoes` ");
    $sql->execute();
    $info = $sql->fetchAll();
   
    foreach ($info as $key => $value) {
         $nome = $value['nome'];
         $insta = $value['Instagram'];
         $whatsapp = $value['Whatsapp'];
         $email = $value['email'];
    }
*/
//-----------------sistema de visualização --------------------//
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');

    $sql = $pdo->prepare("SELECT * FROM `divulgacoes` WHERE id ");
    $sql->execute();
    $info = $sql->fetchAll();
   
    foreach ($info as $key => $value) {
        
         $id = $value['id'];
         $nome = $value['nome'];
         $insta = $value['Instagram'];
         $whatsapp = $value['Whatsapp'];
         $email = $value['email'];



    //     $pts = $value['pts'];
         
//------------------------------------2----------------------------------------------//
         $sql2 = $pdo->prepare("SELECT * FROM `divulgacoes` where id < $id");
         $sql2->execute();
         $infoDiv2 = $sql2->fetchAll();
        
         foreach ($infoDiv2 as $key2 => $value2){
        
         $id2 =  $value2['id'];
         $nome2 = $value2['nome'];
         $insta2 = $value2['Instagram'];
         $whatsapp2 = $value2['Whatsapp'];
         $email2 = $value2['email'];
    
//---------------------------------------3-------------------------------------------//
            $sql3 = $pdo->prepare("SELECT * FROM `divulgacoes` where id < $id2");
            $sql3->execute();
            $infoDiv3 = $sql3->fetchAll();
        
            foreach ($infoDiv3 as $key3 => $value3){
            
            $id3 = $value3['id'];
            $nome3 = $value3['nome'];
            $insta3 = $value3['Instagram'];
            $whatsapp3 = $value3['Whatsapp'];
            $email3 = $value3['email'];
            
            //------------------------------------4----------------------------------------------//
            $sql4 = $pdo->prepare("SELECT * FROM `divulgacoes` where id < $id3");
            $sql4->execute();
            $infoDiv4 = $sql4->fetchAll();
        
            foreach ($infoDiv4 as $key4 => $value4){
            
            $id4 =  $value4['id'];
            $nome4 = $value4['nome'];
            $insta4 = $value4['Instagram'];
            $whatsapp4 = $value4['Whatsapp'];
            $email4 = $value4['email'];
          //---------------------------------------5-------------------------------------------//
          $sql5 = $pdo->prepare("SELECT * FROM `divulgacoes` where id < $id4");
          $sql5->execute();
          $infoDiv5 = $sql5->fetchAll();
      
          foreach ($infoDiv5 as $key5 => $value5){
            
          $id5 = $value5['id'];
          $nome5 = $value5['nome'];
          $insta5 = $value5['Instagram'];
          $whatsapp5 = $value5['Whatsapp'];
          $email5 = $value5['email'];
         
       //-------------------------------------6---------------------------------------------//
       $sql6 = $pdo->prepare("SELECT * FROM `divulgacoes` where id < $id5");
       $sql6->execute();
       $infoDiv6 = $sql6->fetchAll();
   
       foreach ($infoDiv6 as $key6 => $value6){
        
       $id6 = $value6['id'];
       $nome6 = $value6['nome'];
       $insta6 = $value6['Instagram'];
       $whatsapp6 = $value6['Whatsapp'];
       $email6 = $value6['email'];
    
        }
        }
        }
        }
        }
        }
         //////////////////////////////////////////////////////////////////////////////////////
     //-------------------------------------SISTEMA DE JULGAMENTO---------------------------------------------//
//---------------------------------------------------1---------------------------------------------------------//
     if(isset($_POST['aprovado'])){
        $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
        
        if(isset($_POST['aprovado'])){
            
            echo '<script type="text/javascript">
                alert("APROVADO COM SUCESSO!");
                </script>';
        
        
        $sqlAP = $pdo->prepare("INSERT INTO `aprovados` VALUES (NULL, ?, ?, ?, ?)");
        $sqlAP->execute(array($nome, $insta, $whatsapp, $email ));
        header("Refresh:0");
        
        $sqlDell = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome'");
        $sqlDell->execute();
        
        header("Refresh:0");
    }}
    
        if(isset($_POST['reprovado'])){
            
            echo '<script type="text/javascript">
                alert("REPROVADO!!!!");
                </script>';
        
    
        $sqlAP = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome'");
        $sqlAP->execute();
        header("Refresh:0");
    } 
//---------------------------------------------------2---------------------------------------------------------//
if(isset($_POST['aprovado2'])){
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
    
    if(isset($_POST['aprovado2'])){
        
        echo '<script type="text/javascript">
            alert("APROVADO COM SUCESSO!");
            </script>';
    
    
    $sqlAP = $pdo->prepare("INSERT INTO `aprovados` VALUES (NULL, ?, ?, ?, ?)");
    $sqlAP->execute(array($nome2, $insta2, $whatsapp2, $email2 ));
    header("Refresh:0");
    
    $sqlDell = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome'");
    $sqlDell->execute();
    
    header("Refresh:0");

}}

if(isset($_POST['reprovado2'])){
            
    echo '<script type="text/javascript">
        alert("REPROVADO!!!!");
        </script>';


$sqlAP = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome2'");
$sqlAP->execute();
header("Refresh:0");
} 
//---------------------------------------------------3---------------------------------------------------------//
if(isset($_POST['aprovado3'])){
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
    
    if(isset($_POST['aprovado3'])){
        
        echo '<script type="text/javascript">
            alert("APROVADO COM SUCESSO!");
            </script>';
    
    
    $sqlAP = $pdo->prepare("INSERT INTO `aprovados` VALUES (NULL, ?, ?, ?, ?)");
    $sqlAP->execute(array($nome3, $insta3, $whatsapp3, $email3 ));
    header("Refresh:0");
    
    $sqlDell = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome'");
    $sqlDell->execute();
    
    header("Refresh:0");

}}

if(isset($_POST['reprovado3'])){
            
    echo '<script type="text/javascript">
        alert("REPROVADO!!!!");
        </script>';


$sqlAP = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome3'");
$sqlAP->execute();
header("Refresh:0");
} 
//---------------------------------------------------4---------------------------------------------------------//
if(isset($_POST['aprovado4'])){
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
    
    if(isset($_POST['aprovado4'])){
        
        echo '<script type="text/javascript">
            alert("APROVADO COM SUCESSO!");
            </script>';
    
    
    $sqlAP = $pdo->prepare("INSERT INTO `aprovados` VALUES (NULL, ?, ?, ?, ?)");
    $sqlAP->execute(array($nome4, $insta4, $whatsapp4, $email4 ));
    header("Refresh:0");
    
    $sqlDell = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome'");
    $sqlDell->execute();
    
    header("Refresh:0");
    
}}

if(isset($_POST['reprovado4'])){
            
    echo '<script type="text/javascript">
        alert("REPROVADO!!!!");
        </script>';


$sqlAP = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome4'");
$sqlAP->execute();
header("Refresh:0");
} 
//---------------------------------------------------5---------------------------------------------------------//
if(isset($_POST['aprovado5'])){
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
    
    if(isset($_POST['aprovado5'])){
        
        echo '<script type="text/javascript">
            alert("APROVADO COM SUCESSO!");
            </script>';
    
    
    $sqlAP = $pdo->prepare("INSERT INTO `aprovados` VALUES (NULL, ?, ?, ?, ?)");
    $sqlAP->execute(array($nome5, $insta5, $whatsapp5, $email5 ));
    header("Refresh:0");
    
    $sqlDell = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome'");
    $sqlDell->execute();
    
    header("Refresh:0");

}}

if(isset($_POST['reprovado5'])){
            
    echo '<script type="text/javascript">
        alert("REPROVADO!!!!");
        </script>';


$sqlAP = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome5'");
$sqlAP->execute();
header("Refresh:0");
} 
//---------------------------------------------------6---------------------------------------------------------//
if(isset($_POST['aprovado6'])){
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=u468517930_next','u468517930_next','Pietro.2007');
    
    if(isset($_POST['aprovado6'])){
        
        echo '<script type="text/javascript">
            alert("APROVADO COM SUCESSO!");
            </script>';
    
    
    $sqlAP = $pdo->prepare("INSERT INTO `aprovados` VALUES (NULL, ?, ?, ?, ?)");
    $sqlAP->execute(array($nome6, $insta6, $whatsapp6, $email6 ));
    header("Refresh:0");
    
    $sqlDell = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome'");
    $sqlDell->execute();
    
    header("Refresh:0");

}}
if(isset($_POST['reprovado6'])){
            
    echo '<script type="text/javascript">
        alert("REPROVADO!!!!");
        </script>';


$sqlAP = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome6'");
$sqlAP->execute();
header("Refresh:0");
} 

if(isset($_POST['REPROVADOSALL'])){

    $sqlDell = $pdo->prepare("DELETE FROM `divulgacoes` WHERE nome ='$nome, $nome2, $nome3, $nome4, $nome5, $nome6'");
    $sqlDell->execute();
    
    header("Refresh:0");
}




/*
for($i = 0; $i < count($info); $i++){
         $nome.$info[$i][$nome];
         $insta = $value['Instagram'];
         $whatsapp = $value['Whatsapp'];
         $email = $value['email'];
}
*/
    $_SESSION['usuario'] = $usuario;
    $_SESSION['cargo'] = $cargo;
    $_SESSION['equipe'] = $equipe;
}






 
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel Administrativo Next Produtora</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!--cadastro-->
    <link href="cadastro/cadastro.html" rel="cadastro/form.css" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Next Produtora</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Último Acesso : 09 Agosto 2022 &nbsp; <a href=""
                    class="btn btn-danger square-btn-adjust">Desconectar</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a class="" href="painel_adm.php"><i class="fa fa-dashboard fa-3x"></i> Painel de
                            Controle</a>
                    </li>
                    <li>
                        <a href="cursos.html"><i class="fa fa-desktop fa-3x"></i> Cursos Disponiveis</a>
                    </li>
                    <li>
                        <a href="ganhos.html"><i class="fa fa-money fa-3x"></i> Meus Ganhos</a>
                    </li>
                    <li>
                        <a href="desempenho.html"><i class="fa fa-bar-chart-o fa-3x"></i> Meu Desempenho</a>
                    </li>
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-table fa-3x"></i>Area Divulgação<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-one-level">
                            <ul class="nav nav-third-level collapse in" style="height: auto;">
                                <li>
                                    <a class="active-menu" href="pendentesdiv.php">Divulgadores Pendentes</a>
                                </li>
                                <li>
                                    <a href="ativosdiv.html">Divulgadores Ativos</a>
                                </li>
                                <li>
                                    <a href="cadastrardiv.html">Cadastrar Divulgador</a>
                                </li>
                                <li>
                                    <a href="checkdiv.html">Conferir Divulgações</a>
                                </li>
    
                            </ul>
                            <li>
                                <a href="#">Aprovados<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="Aprovados/Aprovados_Insta/Aprovados_Insta.html">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="Aprovados/Aprovados_Whats/Aprovados_Whats.html">Whatsapp</a>
                                    </li>
    
                                </ul>
    
                            </li>
                            <li>
                                <a href="#">Reprovados<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="Reprovados/Reprovados_Insta/Reprovados_Insta.html">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="Reprovados/Reprovados_Whats/Reprovados_Whats.html">Whatsapp</a>
                                    </li>
    
                                </ul>
    
                            </li>
                        </ul>
                    </li>

                <li>
                    <a href="ticket.html"><i class="fa fa-edit fa-3x"></i> Abrir Ticket</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i>Next Divulgação Turbo<span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-one-level">
                        <li>
                            <a href="#">Como Funciona o Turbo?</a>
                        </li>
                        <li>
                            <a href="#">Turbo Contatos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Exportar todos Contatos</a>
                                </li>
                                <li>
                                    <a href="#">Exportar Contatos Selecionados</a>
                                </li>
                                <li>
                                    <a href="#">Enviar Mensagem para Todos Contatos</a>
                                </li>
                                <li>
                                    <a href="#">Enviar Mensagem para Tontatos Selecionados</a>
                                </li>

                            </ul>
                        <li>
                            <a href="#">Turbo Grupos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Enviar Mensagem em Grupos Selecionados</a>
                                </li>
                                <li>
                                    <a href="#">Enviar Mensagem em Todos os Grupos</a>
                                </li>
                                <li>
                                    <a href="#">Extrair Contatos dos Grupos Selecionados</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="avisos.html"><i class="fa fa-square-o fa-3x"></i> Mural de Avisos</a>
                </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Painel de Controle</h2>
                        <h5 class="text">Seja bem vindo,
                            <?php echo $usuario; ?>
                        </h5> <!-- Usuario -->
                        <h5 class="text">Cargo:
                            <?php echo $cargo; ?>
                        </h5> <!-- Cargo -->
                        <h5 class="text">Equipe:
                            <?php echo $equipe; ?>
                        </h5> <!-- Equipe -->
                        <h5 class="text">Email: NÃO CONSTA NO BANCO DE DADOS </h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-envelope-o"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">Email</p>
                                <br>
                                <br>
                                <br>
                                <center><a href="#">Acessar</a></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-calendar"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">Reserva</p>
                                <br>
                                <br>
                                <br>
                                <center><a href="#">Acessar</a></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue set-icon">
                                <i class="fa fa-qrcode"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">Cupom</p>
                                <br>
                                <br>
                                <br>
                                <center><a href="#">Acessar</a></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-brown set-icon">
                                <i class="fa fa-ban"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">Ban</p>
                                <br>
                                <br>
                                <br>
                                <center><a href="#">Acessar</a></center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Ultimas divulgaçoes
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Usuário</th>
                                                <th>Whatsapp</th>
                                                <th>Instagram</th>
                                                <th>Julgamento</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form method="post" action="">
                                            <tr>
                                                <td>1</td> 
                                                <td><?php echo $nome;  ?></td>
                                                <td><a target="_blank" href="https://wa.me/55<?php echo $whatsapp;?>"><?php echo $whatsapp;?></td>
                                                <td><a target="_blank" href="https://www.instagram.com/<?php echo $insta;  ?>">@<?php echo $insta;  ?></td>
                                                <td><button name="aprovado" type="submit">Aprovado</button><button name="reprovado" type="submit">Reprovado</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td> 
                                                <td><?php echo $nome2;  ?></td>
                                                <td><a target="_blank" href="https://wa.me/55<?php echo $whatsapp2;?>"><?php echo $whatsapp2;  ?></td>
                                                <td><a target="_blank" href="https://www.instagram.com/<?php echo $insta2;  ?>">@<?php echo $insta2;  ?></td>
                                                <td><button name="aprovado2" type="submit">Aprovado</button><button name="reprovado2" type="submit">Reprovado</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td> 
                                                <td><?php echo $nome3;  ?></td>
                                                <td><a target="_blank" href="https://wa.me/55<?php echo $whatsapp3;  ?>"><?php echo $whatsapp3;  ?></td>
                                                <td><a target="_blank" href="https://www.instagram.com/<?php echo $insta3;  ?>">@<?php echo $insta3;  ?></td>
                                                <td><button name="aprovado3" type="submit">Aprovado</button><button name="reprovado3" type="submit">Reprovado</button></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><?php echo $nome4;      ?></td>
                                                <td><a target="_blank" href="https://wa.me/55<?php echo $whatsapp4;  ?>"><?php echo $whatsapp4;  ?></td>
                                                <td><a target="_blank" href="https://www.instagram.com/<?php echo $insta4;  ?>">@<?php echo $insta4;  ?></td>
                                                <td><button name="aprovado4" type="submit">Aprovado</button><button name="reprovado4" type="submit">Reprovado</button></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><?php echo $nome5;      ?></td>
                                                <td><a target="_blank" href="https://wa.me/55<?php echo $whatsapp5;  ?>"><?php echo $whatsapp5;  ?></td>
                                                <td><a target="_blank" href="https://www.instagram.com/<?php echo $insta5;  ?>">@<?php echo $insta5;  ?></td>
                                                <td><button name="aprovado5" type="submit">Aprovado</button><button name="reprovado5" type="submit">Reprovado</button></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><?php echo $nome6;      ?></td>
                                                <td><a target="_blank" href="https://wa.me/55<?php echo $whatsapp6;  ?>"><?php echo $whatsapp6;  ?></td>
                                                <td><a target="_blank" href="https://www.instagram.com/<?php echo $insta6;  ?>">@<?php echo $insta6;  ?></td>
                                                <td><button name="aprovado6" type="submit">Aprovado</button><button name="reprovado6" type="submit">Reprovado</button></td>
                                            </tr>
                                            </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">

                        <div class="chat-panel panel panel-default chat-boder chat-panel-head">
                            <div class="panel-heading">
                                <i class="fa fa-comments fa-fw"></i>
                                Chat Online
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu slidedown">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-refresh fa-fw"></i>Atualizar
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-sign-out fa-fw"></i>Desconectar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <ul class="chat-box">
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="assets/img/1.png" alt="User" class="img-circle" />
                                        </span>
                                        <div class="chat-body">
                                            <strong>IGÃO</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins atrás
                                            </small>
                                            <p>
                                                Sistema tá em teste, tem alguns bugs ainda
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">

                                            <img src="assets/img/2.png" alt="User" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">

                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>13 mins atrás</small>
                                            <strong class="pull-right">Gotta</strong>

                                            <p>
                                                Fumaceiraaaaaaa
                                            </p>
                                        </div>
                                    </li>
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="assets/img/3.png" alt="User" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">

                                            <strong>Lud</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>14 mins atrás</small>

                                            <p>
                                                Vamo derrete esse sistema agora
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="assets/img/4.png" alt="User" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">

                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>15 mins atrás</small>
                                            <strong class="pull-right">Cezar</strong>

                                            <p>
                                                Vou arrumar as conexões do site
                                            </p>
                                        </div>
                                    </li>
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="assets/img/1.png" alt="User" class="img-circle" />
                                        </span>
                                        <div class="chat-body">
                                            <strong>IGÃO</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins atrás
                                            </small>
                                            <p>
                                                Quando isso rodar liso vai ser lindo
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="assets/img/2.png" alt="User" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">

                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>13 mins atrás</small>
                                            <strong class="pull-right">Lud</strong>

                                            <p>
                                                Sou gay mano é verdade esse bilhete
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="panel-footer">
                                <div class="input-group">
                                    <input id="btn-input" type="text" class="form-control input-sm"
                                        placeholder="Escreva sua mensagem e clique em enviar" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning btn-sm" id="btn-chat">
                                            Enviar
                                        </button>
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Hierarquia
                            </div>
                            <div class="panel-body">
                                <span class="label label-default">Promoter</span>
                                <span class="label label-primary">Assistente</span>
                                <span class="label label-success">Supervisor</span>
                                <span class="label label-info">Coordenador</span>
                                <span class="label label-warning">Gerente</span>
                                <span class="label label-danger">Fundador</span>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- JQUERY -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS -->
    <script src="assets/js/morris/igao.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!--ETC -->
    <script src="assets/js/custom.js"></script>


</body>

</html>