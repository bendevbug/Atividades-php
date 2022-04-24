
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

	// == igual
	// === idêntico
	// != diferente
	// <> diferentes
	// !== não idêntico, se são diferentes e de tipos diferentes
	// < valor menor a algo 
	// > valor maior a algo 
	// <= menor ou igual que 
	// >= maior ou igual que 


	// && ou AND retorna verdadeiro se as duas forem verdadeiras.
	//OR ou || retorna verdadeiro se pelo menos uma delas for verdadeira.
	//XOR retorna verdadeiro se uma expressão for falsa e a outra verdadeira.


	if ((3 < 19 || 3 > 1)  || 5 !== 5) {
		echo 'true';
	} else {

		echo 'nope';
	}

	// if (condition) {
		
	// } elseif (condition) {
		
	// } else {
		
	// }

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
