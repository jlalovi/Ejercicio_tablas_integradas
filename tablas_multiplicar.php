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
	&lt;h2>Tablas de multiplicar&lt;/h2>
	&lt;?php
		for ($tabla=1; $tabla<=10; $tabla++) {
			echo \'&lt;div style="float:left">&lt;table border="1px solid black">\';
			echo \'&lt;tr>&lt;th colspan=2 style = "background-color: red; color: white;">Tabla del \'.$tabla.\'&lt;/th>&lt;/tr>\';
			for ($i=1; $i <= 10; $i++) {
				//Por cada iteraci�n, creo una l�nea, coloreada si es prima:
				echo "&lt;tr>";						
				for ($j=0; $j &lt; 3 ; $j++) {
					//Compruebo en qu� celda me encuentro en cada iteraci�n de este segundo bucle:
					if ($j==0) {
						echo "&lt;td>".$tabla." x ".$i."&lt;/td>"; //Imprimo el n�mero correspondiente a la celda
					}
					if ($j==1) { //Celdas con el resultado 
						echo "&lt;td>".$i*$tabla."&lt;/td>";
					}
				}
				echo "&lt;/tr>";
			}
			echo \'&lt;/table>&lt;/div>\';
		}
	?>
</pre>'
?>
		<a class="boton" href="tablas_multiplicar_ejecutado.php">Ejecutar c�digo</a>
	</div>
	<div class="clear"></div>
	<div class="footer">
		<img width="100px" src="img/javi.png">
		<p>� DAW_jlalovi 2015</p>
	</div>
</body>
</html>