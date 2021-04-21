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
	<br><br><br><br>
	<h1> >>ORÇAMENTOS<< </h1><hr><br>

	<div class="conteudo">
		
		<?php 
			
			$servico = $_POST["servico"]; 
			$data = $_POST["data"];
			$garantia = $_POST["garantia"];
			$aparelho = $_POST["aparelho"];
			$cliente =$_POST["cliente"];
		
			echo "<strong>Detalhes do Orçamento</strong><br><br>";
			echo "Data $data Tempo de Garantia Após a Entrega $garantia Meses<br><br>";
			echo "Aparelho Para Manuntenção: $aparelho<br><br>";
			
			echo "Serviços a ser Executado: $servico <br><br>";

			switch($servico) {
				
				case 'formatação':

					echo "O Valor Total Sera de R$ 70,00 a Mão de Obra Mais 50.00 de Equipamentos,<strong> Totalizando R$ 120,00</strong><br><br>";
					break;
				
				case 'Trocas De Peças':
					
					echo "O Valor Total Sera de R$ 100,00 a Mão de Obra Mais 50.00 de Equipamentos, <strong>Totalizando R$ 150,00</strong><br><br>";
					break;
				
				case 'Outros':

					echo "O Valor Total Sera de R$ 170,00 a Mão de Obra Mais 50.00 de Equipamentos,<strong> Totalizando R$ 220,00</strong><br><br>";
					break;

				default:
					echo "Infelismente Não Possivel Realizar esse Serviço no Momento";
					break;
			}
				echo "<br>Declaro Estar de Acordo Com os Valores e Inforções Acima Descritos<br><br> <strong>$cliente</strong>";

		 ?>

		 <p>Assinatura:________________________________________</p>
		 <P>Data:__/__/__</P><br>
		 <p><strong>Ao Assinar Você Concorda Com Todos os Termos de Serviços Prestado</strong></p>
		  	<form>
		  		<input type="button" value="Imprimir Orçamento" onclick="window.print()">
		  	</form>

		  <br><a href="index.html"> << Voltar </a><br><br>
	</div>

	<footer>
		<h3>Todos os direitos reservados - Leonardo Costa</h3>
	</footer>




</body>
</html>