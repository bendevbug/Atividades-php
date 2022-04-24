
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

    $texto = 'Meu nome é Benjamin';

    //tudo
    echo "Tudo em minúsculo";
    echo '<br />';
    echo strtolower($texto);
    echo '<br />';
    echo "Tudo em maiúsculo";
    echo '<br />';
    echo strtoupper($texto);
    echo '<br />';
    echo strtoupper('bom dia');
    echo '<br />';
    echo 'Primeira maiúscula';
    echo '<br />';
    echo ucfirst($texto);
    echo '<br />';
    echo 'Conta os caracteres';
    echo '<br />';
    echo strlen($texto);
    echo '<br />';
    echo 'Substitui uma cadeia de caracteres por outra dentro de uma string, nesse caso foi Benjamin por Ben';
    echo '<br />';
    echo str_replace('Benjamin', 'Ben', $texto);
    echo '<br />';
    echo 'Retorna a partir de uma posição do caractere e quantidade de letras a parte de uma string';
    echo '<br />';
    echo substr($texto, 4, 7);


	?>


<div>
	
   



</div>
	
	

	


</body>


</html>
