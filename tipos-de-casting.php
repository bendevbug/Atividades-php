
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

    // Casting de tipos

    // int = float e string 

    // float = int e string 

    // string = int string e boolean 

    // boolean = int e string
    
    //Transformação

    //gettype() => retorna o tipo de variável

    $valor = 10.5;
    // $valor2 = (float) $valor; float, double
    // $valor2 = (string) $valor; float, double
    // $valor2 = (int) $valor;
    $valor2 = (string) $valor;

    echo  $valor. ' ' .gettype($valor);
    echo '<br />';
    echo  $valor2. ' ' .gettype($valor2);





	?>


	<h1>Ficha</h1>
<div>
	

</div>
	
	

	


</body>


</html>
