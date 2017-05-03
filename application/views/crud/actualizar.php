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
			<?= form_open('profesores/actualizar'); ?>
			<td><?= form_input('cedula',$profesor->getCedula(),['id'=>'cedula',"class"=>"form-control"]); ?></td>
			<td><?= form_input('nombre',$profesor->getNombre(),['id'=>'nombre',"class"=>"form-control"]); ?></td>
			<td>
				
				<?= form_hidden('id',$profesor->getId(),['id'=>'id',"class"=>"form-control"]); ?>
				<?= form_submit('editar','Editar',['class'=>'btn btn-primary']); ?>
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