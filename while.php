
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

    // Faz uma ação até ter uma condição que o pare, importate o incremento pois sem isso 
    // entrará num loop infinito
    $num = 1;

    echo "Início <br />";

    while ($num <= 20) {
        $factor = 5;
        $result = $num*$factor;
        // break; Interrompe os laços de repetição 
        $num++;
         if($num == 15) {
             continue;
            //  break;
         }

         echo "$result <br />";
        }

    echo "Fim <br />";

    $num2 = 1;

    while($num2 < 10) {
        $num2++;

        if($num2 == 5) {
           continue;
        // como se eu excluí-se o numero 5 desse looping por meio d euma condição 
        }

        echo "$num2 <br />";
    }
	?>

   

<div>
	
   



</div>
	
	

	


</body>


</html>
