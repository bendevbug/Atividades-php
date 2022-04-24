
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

    // $num = 25.2;
    
    // echo date('d/m/Y H:i');
    // echo '<br />';
    // echo date_default_timezone_get();
    // echo '<br />';
	// echo date_default_timezone_set('America/Sao_Paulo');
    // echo '<br />';
    // echo date('d/m/Y H:i');
	
	$data_inicial = '2018-04-24' ;
	$data_final = '2018-05-15';

	//time stamp representação de tempo
	//01/01/1970 -- 2018-04-24

	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);
	echo '<br />';
	echo $data_inicial . ' - ' . $time_inicial;
	echo '<br />';
	echo $data_final . ' - ' . $time_final;
	echo '<br />';
	$intervalo_de_tempo = $time_final - $time_inicial; 

	echo $intervalo_de_tempo;
	echo '<br />';

	$tempo_em_hora = ($intervalo_de_tempo / 60)/60;

	echo $tempo_em_hora;
	echo '<br />';

	$tempo_em_dias = $tempo_em_hora/24;
	echo $tempo_em_dias;

	?>


<div>
	
   



</div>
	
	

	


</body>


</html>
