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
				<td>Ano:</td>
				<td>
					<select name="ano">
						<option value="&nbsp;"></option>
						<?php
							$ano=$_POST['ano'];
							for($x=1900; $x<=2024; $x++) {
							echo "<option value=$x> $x </option>";
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
			echo '<br> O ano escolhido: '.$ano.'<br>';
		?>
	</body>
</html>