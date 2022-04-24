
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


    function exibirBoasVinda() {
        echo 'Boas vindas';
    }

    exibirBoasVinda();

    echo "<br />";

    function calcularTerreno($largura, $comprimento) {

        $area = $largura * $comprimento;

        echo "$area";
    }

   echo calcularTerreno(30,50);
   echo '<br />';
   echo calcularTerreno(20,50);
   echo '<br />';
   echo calcularTerreno(10,50);
   echo '<br />';
   echo calcularTerreno(50,50);
   echo '<br />';
   echo calcularTerreno(90,50);
   echo '<br />';



	?>


	
<div>
	<h1>Pós incremento</h1>

    <?php 
    
   
    

    
    
    
    
    ?>

</div>
	
	

	


</body>


</html>
