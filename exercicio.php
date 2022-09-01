<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

		git remote add origin https://github.com/AleCavaSil/DoacaoDeSangue.git
		git branch -M main
		git push -u origin main
		<?php
			$idade = 25;
			$peso = 50;			
		?>

		<h1>Detalhes da doação</h1>

		<p>
			O paciente: 
			<?php
				if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
				 	echo "Atende aos requisitos";
				 } else {
				 	echo "Não atende os requisitos";
				 }
			?>
		</p>
	</body>
</html>