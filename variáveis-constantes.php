
<!-- tags PHP -->


<!-- tag padrão: < ?php código aqui? >-->
<!-- tag de impressão < ?= código aqui? >
tag curta < ? código aqui? > desabilitada
*Asp tag < % código aqui % > Descontinuada na versão 7 -->

<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso PHP</title>


</head>


<body>

	<?php 

	//ambiente de desenvolvimento:
	//BD_URL (endereco_bd_dev)
	//BD_USUARIO (usuario_dev)
	//BD_SENHA (senha_dev)

	//por essas variáveis serem constantes o valor ñ pode ser modificado


	//ambiente de produção:
	//BD_URL (endereco_bd_prod)
	//BR_USUARIO (usuario_prod)
	//BD_SENHA (senha_prod)


	//variáveis constantes:

		// define('nomedavariável', 'valordavariável')
		define('BD_URL', 'endereco_bd_dev');
		define('BD_USUARIO', 'usuario_dev');
		define('BD_SENHA', 'senha_dev');

		// BD_URL  n precisa usar o $

		echo BD_URL . '<br />';
		echo BD_USUARIO . '<br />';
		echo BD_SENHA . '<br />';


	?>


	<h1>Ficha</h1>
<div>
	<!-- <br>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Altura: <?= $altura ?></p>
	<p>Fumante: <?= $fumante ?></p> -->

</div>
	
	

	


</body>


</html>
