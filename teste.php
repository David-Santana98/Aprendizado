<?php
$idade = 2020 - 1985;
$nome = 'David';
$nomes = array("André", "Bruno", "Carlos");
$nomes = ["Diego", "Eduardo", "Fernando"]
?>
<html>

<head>
	<title>Página do <?php echo $nome?></title>
</head>

<body>
<h1>Ele tem <?php echo $idade?> anos de idade!</h1>
	<h1>Olá Mundo</h1>
	<p>Hoje é <?php echo date("d/m/Y H:i:s") ?></p>
	<p>Eu tenho <?php echo 2022 - 1990?> Anos</p>
	<p><?php 
	$idade = 20;
	 $idade_daqui_cinco = $idade + 5;
	 $ano_nascimento = 2022 - $idade;
	 $total_de_pedacos_de_bolo = $idade * 8;
	 $decadas = $idade/10;
	 $anos_desde_multiplo_de_9 = $idade % 9;
	?></p>

	<?php 
	$nome1 = "João da Silva";
	$mensagem = 'Seja bem-vindo(a)';
	 echo $mensagem_final = $mensagem . ', ' . $nome1;
	?>
	<?php 
	$ano = 1985;
	while ($ano <= 2022) {
		$idade = $ano - 1985;
		echo "<p>Sua idade era $idade em $ano</p>";
		$ano++;
	}?>
	<?php 
	echo $nomes[0];
	echo $nomes[1];
	$nomes[] = " Gabriel";
	$nomes[60] = " Henzo";
	echo $nomes[60];
	?>
	<ul>
	<?php 
		foreach ($cesta as $cest){
			echo "<li>$cest</li>";
		}?>
	</ul>	 
	<?php $nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"]; ?>
<ul>
    <?php foreach($nomes as $nome) {
        echo "<li>$nome</li>";
    }?>
</ul>