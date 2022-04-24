
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

    //sequenciais 

    // $lista_frutas = array('Banana', 'maça', 'Uva', 'Castanha', 'Berinjela','Abacate', 'Cenoura');
    

    // $lista_frutas[]= 'Tomate';
    // echo $lista_frutas[5];
    // echo '<br />';
    // echo $lista_frutas[2];
    // echo '<br />';
    // echo '<pre>'; //mostra correta formatação dos arrays;
    // var_dump($lista_frutas);
    // echo '<hr />';
    // print_r($lista_frutas);


    $lista_comidas = [];

    $lista_comidas['frutas']= array(1=>'Banana', 'Maça', 'Castanha', 'Abacate');
    $lista_comidas['pessoas'] = [1=>'João', 'Guilherme', 'Pedro', 'Suzana'];

    echo '<pre>';
    print_r($lista_comidas);
    echo $lista_comidas['frutas'][3] . '<br />' .   $lista_comidas['pessoas'][2];

   

	?>


<div>
	
   



</div>
	
	

	


</body>


</html>
