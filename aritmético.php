
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

    // Operadores aritméticos 

    // adição +
    // subtração -
    // multiplicação *
    // divisão /
    // módulo %

    // $num1 = 15;
    // $num2 = 6;

    // $soma = $num1 % $num2;

    // echo 'A soma entre ' .$num1. ' e '. $num2.  ' é '. ($num1 + $num2);

    //Decremento e incremento

    // Pré incremento ++$a Adiciona uma unidade antes de teronar $a 
    // Pós incremento $a++ Retorna $a e depois adiciona uma unidade
    // Pré decremento --$a Diminui uma unidade antes de retornar $a
    // Pós decremento $a-- Retorna $a e depois diminui uma unidade 




    // 

	?>


	
<div>
	<h1>Pós incremento</h1>

    <?php 
    
    $a = 7;
    $b = 7;

    echo "Valor contido em a é $a <br />";
    echo "Valor pós incremento em a é ". $a++. " <br />";
    echo "Valor atualizado pós incremento em a é ". $a. " <br />";
    echo "Valor pré incremento em a é ". ++$a. " <br />";
    echo "Valor contido em b é $b <br />";
    echo "Valor pós decremento em b é ". $b--. " <br />";
    echo "Valor atualizado pós decremento em b é ". $b. " <br />";
    echo "Valor pré decremento em b é ". --$b. " <br />";



    

    
    
    
    
    ?>

</div>
	
	

	


</body>


</html>
