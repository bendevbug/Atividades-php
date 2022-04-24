
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

            $registros=[
                ["Notícia" => "Título notícia 1", "conteudo" =>
                "Conteúdo notícia 1"],
                ["Notícia" => "Título notícia 2", "conteudo" =>
                "Conteúdo notícia 2"],
                ["Notícia" => "Título notícia 3", "conteudo" =>
                "Conteúdo notícia 3"] ] ;
        
        echo "<pre />";
        print_r($registros);

        $i = 0;
        //count para ir até o número de arrays disponíveis
        while ($i < count($registros)) {
            echo "<h2>" .  $registros[$i]["Notícia"] . "</h2>";
            echo "<h3>" .  $registros[$i]["conteudo"] . "</h3>";

            echo "<hr />";
            $i++;
        }

  

	?>

   

<div>
	
   



</div>
	
	

	


</body>


</html>
