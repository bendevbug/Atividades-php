
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

    //Função para calcular imposto de renda

    function calculoImpostoDeRenda ($salario) {

        if ($salario <= 1903.98 ) {
            $imposto = 0;

            return $imposto;
        } else if ( 1903.98 >= $salario || $salario <= 2826.65) { 
         $aliquota = 7.5/100;
         $imposto = $salario * ($aliquota);

         return $imposto;
    } else if ( 2826.66 >= $salario || $salario <= 3751.05) {
        $aliquota = 15/100;
        $imposto = $salario * ($aliquota);

        return $imposto;
    }  else if ( 3751.06 >= $salario || $salario <= 4664.68) {
        $aliquota = 22.5/100;
        $imposto = $salario * ($aliquota);
        
        return $imposto;
    } else {
        $aliquota = 27.5/100;
        $imposto = $salario * ($aliquota);
        
        return $imposto;
    }
}

	?>


<div>
	
    <h1>Seu imposto de renda</h1>

    <p>Salário: <?php echo '5.000' ?></p>
    <p>I.R: <?php echo 'O imposto de renda será de: '.number_format(calculoImpostoDeRenda(5000), 2) ?></p>



</div>
	
	

	


</body>


</html>
