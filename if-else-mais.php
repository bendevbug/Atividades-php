
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

	$usuario_cartao = true;
	$valor_compra = 10;

	$valor_frete = 50;

	$recebeu_desconto = false;


	if ($usuario_cartao == true && $valor_compra >= 400) {
		$valor_frete = 0;
		echo "Valor do frete é igual a $valor_frete";
	} else if ( $usuario_cartao == true && $valor_compra >= 300 ) {
	    $valor_frete = 20;
		echo "Valor do frete é igual a $valor_frete";
	} else if ( $usuario_cartao == true && $valor_compra >= 200 ) {
	    $valor_frete = 10;
		echo "Valor do frete é igual a $valor_frete";
     } else {
     	$recebeu_desconto = false;
     	echo "Valor do frete é igual a $valor_frete";
	    $valor_frete = 50;

     }
	?>




	<h1>Detalhes do pedido</h1>

		<p>
			Possui cartão da loja?
			<?php 

				if($usuario_cartao == true){
					echo 'sim';
					} else {
						echo 'não';
					}

			?>
				
		</p>
		<p>
			Valor da compra: <?= $valor_compra ?>
		</p>
		<p>
			Recebeu desconto no frete?
			<?php 

				if($recebeu_desconto == true){
					echo 'sim';
					} else {
						echo 'não';
					}

			?>
				
		</p>
		<p>
			Valor do frete: <?= $valor_frete ?>
		</p>

	


</body>


</html>

