<?php
session_start();
if (!$_SESSION['logado']) {
	header('Location: conexao.php');
}

$cargo = $_SESSION['cargo'];

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
}
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Next</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css3/bootstrap.min.css" rel="stylesheet">
    <link href="css3/next.css" rel="stylesheet">
<!--
    
Next Produtora

-->
</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h2 class="text-center">SEJA BEM VINDO <?php echo $_SESSION[usuario]; ?></h2> <!-- Usuario -->
				<h4 class="text-center"><?php echo $cargo; ?></h4> <!-- Cargo -->
				<h5 class="text-center"><?php echo $_SESSION[equipe]; ?></h5> <!-- Equipe -->
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="painel_adm.html" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Tela Inicial
                    </a></li>
                    <li class="tm-nav-item"><a href="painel_adm.php" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                    Administrador
                    </a></li>
                    <li class="tm-nav-item"><a href="painel_promoter.php" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Promoter
                    </a></li>
                    
                </ul>
            </nav>
			        <p class="tm-mb-80 pr-5 text-white">
            </p>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/xziux" target="_blank" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://instagram.com/produtoranext" target="_blank" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
				<a href="#" target="_blank" class="tm-social-link">
                    <i class="fab fa-whatsapp tm-social-icon"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Pesquisar..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div> 
            <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class=" tm-post-link-inner">
                            <img src="img3/img-03.jpg" alt="Image" class="img-fluid">                            
                        </div>  
                        <span class="position-absolute tm-new-badge">NÃO CONFUNDA TUBARÃO COM SARDINHA</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">MURAL DE AVISOS</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        <br> Atenção: (2) Duas Novas vagas para "ASSISTENTE" disponivel
                        <br>
                        <br> Reunião "domingo" 14/08/2022 ás 20h no Discord da Produtora
                        <br>
                        <br> Nova atualização do sistema disponivel!
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Data da publicação</span>
                        <span class="tm-color-primary">Agosto 09, 2022</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Postado por:</span>
                        <span>Fundador IGÃO</span>
                    </div>
                </article>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Anterior</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Próximo</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Pagina</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>                
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://instagram.com/igaozero" target="_blank" class="tm-external-link">IGÃO</a>
					<br>
					Programador: <a rel="nofollow" target="_parent" href="https://instagram.com/cezar051" target="_blank" class="tm-external-link">CEZAR</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2022 Next Produtora
                </div>
            </footer>
        </main>
    </div>
    <script src="js3/jquery.min.js"></script>
    <script src="js3/next-script.js"></script>
</body>
</html>