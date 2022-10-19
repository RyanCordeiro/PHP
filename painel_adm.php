<?php
session_start();

if (!$_SESSION['logado']) {
    header('Location: login.php');
}
$usuario = $_SESSION['usuario'];
$cargo = $_SESSION['cargo'];
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
if($cargo === "1"){
     $cargo = "Fundador";
}

if($cargo === "2"){
     $cargo = "Líder";
}

if($cargo === "3"){
     $cargo = "Vice Líder";
}

if($cargo === "4"){
     $cargo = "Assistente";
}else ($cargo = "Promotor")

 
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
font-size: 16px;"> Último Acesso : 09 Agosto 2022 &nbsp; <a href="#"
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
                        <a class="active-menu" href="painel_adm.html"><i class="fa fa-dashboard fa-3x"></i> Painel de
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
                        <a href="#"><i class="fa fa-table fa-3x"></i>Area Divulgação<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-one-level">
                            <ul class="nav nav-third-level collapse in" style="height: auto;">
                                <li>
                                    <a href="pendentesdiv.php">Divulgadores Pendentes</a>
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
                <hr />
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue">
                                <i class="fa fa-warning"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">AVISO IMPORTANTE </p>
                                <br>
                                <hr />
                                <p class="text-muted">
                                    <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                                        Nova atualização conta com : Cursos, Medidor de Desempenho, Rank, Ganhos, Área
                                        de Ticket, Chat Online, Email Personalizado e muito mais!
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                            <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; TURBO</strong>
                            <p class="text-muted">Quer acelerar seus ganhos? Ajudamos você com a ferramenta envio em
                                massa, quer saber mais? Acesse a categoria "Next Divulgação Turbo" e aprenda como!</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
                        <div class="panel ">
                            <div class="main-temp-back">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Canoas, Rio Grande do
                                            Sul </div>
                                        <div class="col-xs-6">
                                            <div class="text-temp"> 10° </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-bug"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">Bug</p>
                                <br>
                                <br>
                                <center><a href="#">Reportar</a></center>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /. ROW  morris-bar-chart -->
                <div class="row">


                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Metas e Resultados
                            </div>
                            <div class="panel-body">
                                <div id="#"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-thumbs-up fa-5x"></i>
                                <h3>Aprovados </h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <a href="pendentesdiv.php">Ver todos</a>

                            </div>
                        </div>
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa-thumbs-down fa-5x"></i>
                                <h3>Reprovados </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                <a href="#">Ver todos</a>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-comments-o fa-5x"></i>
                                <h4>Como funciona a contagem dos pontos?</h4>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <i class="fa fa-rocket fa-5x"></i>
                                Cada divulgação aprovada conta 1 Ponto

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Quadro de Pontuação
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Usuário</th>
                                                <th>Equipe</th>
                                                <th>Instagram</th>
                                                <th>Pontuação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Igão</td>
                                                <td>Fênix</td>
                                                <td>@igaozero</td>
                                                <td>10 pontos</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Gotta</td>
                                                <td>Los Magos</td>
                                                <td>@gottanext_</td>
                                                <td>5 pontos</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lud</td>
                                                <td>Tsunami</td>
                                                <td>@djludnext</td>
                                                <td>4 pontos</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Lucas</td>
                                                <td>Revoada</td>
                                                <td>@Lucasnxt</td>
                                                <td>3 pontos</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Caroline</td>
                                                <td>Fênix</td>
                                                <td>@carolinepires</td>
                                                <td>2 pontos</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Sabrina</td>
                                                <td>Embrazados</td>
                                                <td>@tsabrinaprx</td>
                                                <td>1 pontos</td>
                                            </tr>

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