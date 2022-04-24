
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

    //in array -> retorna true or false para o que está sendo pesquisado
    //arra_search()

    $lista_frutas = array('Banana', 'maça', 'Uva', 'Castanha', 'Berinjela','Abacate', 'Cenoura');

    echo '<pre>';
    print_r($lista_frutas);

    // $existe = in_array('Berinjela', $lista_frutas); //tru -> 1 false -> vazio

    $existe = array_search('Uva', $lista_frutas); //retorna a posição, caso exista, caso não, retorna null

    if ($existe != null) {
        echo 'O objeto que você pesquisou existe';
    } else {
        echo 'O objeto que você pesquisou não existe';
    }


    $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];

    echo '<pre>';
    print_r($lista_coisas);

    echo in_array('Uva', $lista_coisas['frutas']);


	?>

   

<div>
	
   



</div>
	
	

	


</body>


</html>
