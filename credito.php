<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
	<div class="search-box">
 	     	<input class="search-txt" type="text" name="" placeholder="Faça a sua Pesquisa">
 	     	<a class="search-btn" href="index.html"></a>
 	     	</div>
	<br><br><br><br>
	<h1> >>TRATAMENTO DE DADOS COM PHP<< </h1><hr><br>

	<div class="pesquisa">
		<h6>Leonardo Costa</h6>
	</div>

	<div class="conteudo">
		<?php 
		
		$nome = $_POST["Nome"];
		$renda = $_POST["Renda"];
		
		
		
			echo "<strong>Ola $nome Muito Obrigado Por Seu Contato.</strong><br>";
		
		if ($renda >= 2000) {

		  echo "<strong>Parabens Seu Credito Foi Aprovado.</strong>";
		}
		
		elseif ($renda < 2000) {

			echo "<strong>Infelismente Não Foi Libera o Seu Credito.<br><br>Clique Em voltar Para ir a Pagina Inicial</strong><br><BR>";
		
		}

		 ?>
		  <br><a href="index.html"> << Voltar </a>
	</div>

	<div class="rodape">
		<h2>PROGRAMAÇÃO WEB COM PHP</h2><br>
		<h2>PÁGINA DE TRATAMENTO DE DADOS</h2>
	</div>
	<footer>
		<h3>Todos os direitos reservados - Leonardo Costa</h3>
	</footer>




</body>
</html>