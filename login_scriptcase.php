<?php
//conecção
$conn = mysqli_connect('localhost', 'root', '', 'academia_point');
    // Código a ser executado se o método de requisição for POST

//transforma o login e senha em variavies
$usuario = {usuario};
$senha = {senha};


  //verifica se nome e senha correspondem ao banco de dados sql

$query ="SELECT * FROM `cadastro` WHERE Nome='$usuario' AND Senha='$senha'";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
[usr_genetica]=$row['Genetica'];

if (mysqli_num_rows($result) > 0) {
  // Usuário e senha estão corretos

	[usr_login] = $usuario;
	[usr_senha] = $senha;
		sc_redir(Point.php);
} else {
	sc_error_message("Usuario ou Senha invalidos");
};
?>
