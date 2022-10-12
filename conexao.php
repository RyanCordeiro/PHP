<?php

// $pdo = new PDO('mysql:host=127.0.0.1;dbname=u468517930_next','u468517930_next','Pietro.2007');

define('HOST', 'LOCALHOST');
define('USUARIO', 'u468517930_next');
define('SENHA', '');
define('DB', 'test');
$conexao = mysqli_connect(HOST , USUARIO, SENHA, DB) or die('Falhou Sua conexão com o banco de dados');

?>
