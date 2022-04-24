
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

	// Operador E (AND ou &&)- true se todas forem true 
	// operador OU (OR ou ||) - se um deles for true o resultado será true 
	// operador Xor (XOR) - Verdadeiro apenas se umas das expressões for verdadeira, mas ñ ambas 
	// operador negação(!) - inverte o resultado da expressão

	if (5+20 < 19 AND 5+7 < 40)  {
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
