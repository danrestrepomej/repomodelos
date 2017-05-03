<!DOCTYPE html>
<html>
<head>
	<title>Profesores</title>
</head>
<body>
	<h1>Lista de Profesores</h1>
	<table>
		<tr>
			<th>id</th>
			<th>cedula</th>
			<th>nombre</th>
		</tr>
		<?php foreach ($profesores as $profesor){?>	
		<tr>
			<td><?= $profesor->getId() ?></td>
			<td><?= $profesor->getCedula() ?></td>
			<td><?= $profesor->getNombre() ?></td>
			
			
		</tr>
		<?php } ?>
	</table>


	<p><a href="<?php echo base_url(); ?>index.php/profesores/">Menu</a></p>
</body>
</html>