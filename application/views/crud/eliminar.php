<!DOCTYPE html>
<html>
<head>
	<title>Profesores</title>
</head>
<body>
	<h1>Eliminar Profesores</h1>
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
			
			<td>
				<?= form_open('profesores/borrar'); ?>
				<?= form_hidden('id',$profesor->getId(),['id'=>'id',"class"=>"form-control"]); ?>
				<?= form_submit('eliminar','Eliminar',['class'=>'btn btn-primary']); ?>
				<?= form_close(); ?>

			</td>

			
			
		</tr>
		<?php } ?>
	</table>

	<?php if($msg!=""){?>
		<?= $msg ?>
	<?php } ?>


	<p><a href="<?php echo base_url(); ?>index.php/profesores/">Menu</a></p>
</body>
</html>