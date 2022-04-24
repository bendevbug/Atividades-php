
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

    $i = 0;
    $factor = 3;
    $minimo = 70;

    // do {
    //     echo $i++;
    //     echo "<br />";
    // } while ( $i <= 10 );

    
    // Faz uma ação até um comando específico ser atingido
    do {
        $result =  ($i++) * $factor;
        echo $result;
        echo "<br />";
      } 
      while ( $result <= $minimo );
  

	?>

   

<div>
	
   



</div>
	
	

	


</body>


</html>
