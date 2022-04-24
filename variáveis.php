
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

	//variáveis começam com $ e faz distinção entre maiúsculas e minúsculas

	//string
	$nome = 'Benjamin';
	//int
	$idade = 18;
	//float
	$altura = 1.67;
	//boolean
	$fumante = true; //or false (=vazio)

	//..lógica..//

	$idade = '30'; //ppodemos passar para string
	echo "Meu nome é $nome! e tenho " .$idade. '! E tenho ' .$altura. ' de altura.'

	?>


	<h1>Ficha</h1>
<div>
	<br>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Altura: <?= $altura ?></p>
	<p>Fumante: <?= $fumante ?></p>

</div>
	
	

	


</body>


</html>
