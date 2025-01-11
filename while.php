<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>While & For</title>
		<style type="text/css">
			a{
				font-family: verdana;
				text-decoration: none;
				color: #726379;
			}
		</style>
	</head>
	<body>
		<form action="" method="POST">
		<table>
			<tr>
				<td>Mês:</td>
				<td>
					<select name="mes">
						<option value="&nbsp;"></option>
						<?php
							$mes=$_POST['mes'];
							$i=1; // Iniciar
							while ($i<=12) {
								echo "<option value=$i> $i </option>";
									$i++; // Contador
							}
						?>
					</select>
				</td>

				<td colspan="2">
					<input type="submit" name="Verificar">
				</td>
			</tr>
		</table>
		</form>
		<?php
			echo '<br> O mês escolhido: '.$mes.'<br>';
		?>
	</body>
</html>