<html>
	<head></head>
<body>
		
<?php $cesta = [
		'banana' => 12,
		'laranja' => 6,
		'abacaxi' => 2,
		'melancia' => 18
	];?>
	<p>A cesta contém:</p>
	<ul>
		<?php foreach($cesta as $fruta => $quantidade ){
			echo "<li>$quantidade unidade(s) de $fruta</li>";}
			?>
	</ul>

</body>

</html>