<!DOCTYPE html>
<html>
<head>
	<title>Peticiones HTML con PHP</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>
<body>
	<h1>EJERCICIOS DE CLASE</h1>
	<div class="horizontal">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="primo_impar.php">Ejercicio 1: Tabla primo/impar</a></li>
			<li><a href="tablas_multiplicar.php">Ejercicio 2: Tablas multiplicar</a></li>
		</ul>
		<div class="clear"></div>	
	</div>
	<div class="contenido">
<?php 
echo 
'<pre>
	&lt;h2>TABLA PRIMOS/IMPAR&lt;/h2>		
	&lt;table border="1">
		&lt;tr style = "background:black; color:white;">
			&lt;th>Número&lt;/th>
			&lt;th>¿Impar o par?&lt;/th>
			&lt;th>¿Primo?&lt;/th>
		&lt;/tr>
		&lt;?php 
			for ($i=1; $i <= 10; $i++) {
				// Declaro una variable divisible para saber si la iteración \'$i\' es un número primo o no.
				$divisible=0;
				for ($k=2; $k &lt;= $i/2 ; $k++) {
					if ($i%$k==0)
						$divisible++;
				}
				//Por cada iteración, creo una línea, coloreada si es prima:
				if ($divisible==0)
					echo "&lt;tr style = \'background-color: red; color: white;\'>"; //En esta condición, el número es primo, por lo que coloreo el fondo de la fila.
				else
					echo "&lt;tr style = \'background-color: green; color: white;\'>";
				
				for ($j=0; $j < 3 ; $j++) {
					//Compruebo en qué celda me encuentro en cada iteración de este segundo bucle:
					if ($j==0) {
						echo "&lt;td>".$i."&lt;/td>"; //Imprimo el número correspondiente a la celda
					}
					if ($j==1) { //Condicional que imprime si es par o impar el número de la fila
						if ($i%2==0)
							echo "&lt;td>Par&lt;/td>";
						else
							echo "&lt;td>Impar&lt;/td>";
					}
					if ($j==2) { //Condicional que comprueba si es primo o no a través de un bucle
						if ($divisible==0)
							echo "&lt;td>Primo&lt;/td>";
						else
							echo "&lt;td>No&lt;/td>";
					}
				}
				echo "&lt;/tr>";
			}
		?>
	&lt;table>
</pre>'
?>
		<a class="boton" href="primo_impar_ejecutado.php">Ejecutar código</a>
	</div>
	<div class="clear"></div>
	<div class="footer">
		<img width="100px" src="img/javi.png">
		<p>© DAW_jlalovi 2015</p>
	</div>
</body>
</html>