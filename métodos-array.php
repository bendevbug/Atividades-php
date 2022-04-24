
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

    // is_array(array) verifica se é um array

    // array_keys(array) retorna todas as chaves de um array
    
    // sort(array) ordena um array e reajusta seus índices

    // asort(array) ordena um array preservando os índices

    // count(array) conta a quantidade de elementos de um array

    // array_merge(array) Funde um ou mais array_search

    // explode(array) Divide uma string baseada em delimitador

    // implode(array) junta elementos de um array em uma string

    $listaCompras = array('frutas', 'pães', 'verduras', 'leite', 'feijão', 'arroz');
    $listaCompras2 = ['frutas', 'pães', 'verduras', 'leite', 'feijão', 'arroz'];
    $listaCompras3 = [ 1 => 'frutas', 'boo' => 'pães', 30 => 'verduras', "vinte" => "carne"];
    $listaCompras4 = [ 1 => 'frutas', 'boo' => 'pães', 30 => 'verduras', "vinte" => "chocolate"];


    echo "<pre />";
    print_r($listaCompras);
    echo "<pre />";
    print_r($listaCompras2);

    echo "<br />";
    echo is_array($listaCompras);
    echo "<br />";
    print_r(array_keys($listaCompras));
    echo "<br />";
    print_r(sort($listaCompras3));
    echo "<br />";
    print_r($listaCompras3);
    echo "<br />";
    echo asort($listaCompras4);
    echo "<br />";
    print_r ($listaCompras4);
    echo "<br />";
    echo count($listaCompras);
    echo "<br />";
    print_r(array_merge($listaCompras,$listaCompras2));
    echo "<br />";
    $implode = implode(" + ", $listaCompras);
    print_r($implode);
    echo "<br />";
    $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
    $pieces = explode(" ", $pizza);
    echo $pieces[0]; // piece1
    echo $pieces[1]; // piece2


    

	?>

   

<div>
	
   



</div>
	
	

	


</body>


</html>
