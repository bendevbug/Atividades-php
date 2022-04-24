
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

    $valor1 = 'Valor 1';
    $valor2 = 'Valor 2';
    $valor3 = 'Valor 3';


    switch ($valor1) {
        case 'Valor 1':
            echo 'Você escolheu a opção 1';
            break;
        
        case 'Valor 2': 
            echo 'Você escolheu a opção 2';
            break;

        case 3:
        
        echo 'Você escolheu a opção 3';
        break;

        default: 
        
        echo 'Escola uma opção';
        break;
    }
    

	?>


	<h1>Ficha</h1>
  <div>
	<br>
	<select name="select">
    <option value="valor0"> </option>
        <option value="valor1"> <?=$valor1?></option>
        <option value="valor2"><?=$valor2?></option>
        <option value="valor3"><?=$valor3?></option>
    </select>

  </div>
	
	

	


</body>


</html>
