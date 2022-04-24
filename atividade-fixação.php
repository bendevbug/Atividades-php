
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

    $nome = 'Benjamin';
    $idade = 18;
    $peso = 67;
   $print = 'Peso e idade ideal, atende aos requisitos';


    if ( ($idade >= 16 && $idade <=69 ) && $peso >= 50 ) {
       $print;
    } else {
       $print = 'Não coorresponde aos requisitos';
    };
    

	?>


	<h1>Ficha</h1>
<div>
	<br>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Altura: <?= $peso ?></p>
	
    <hr>

    <p>Pode doar sangue? <br> <?= $print ?> </p>

</div>
	
	

	


</body>


</html>
