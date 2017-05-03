<!DOCTYPE html>
<html>
<head>
	<title>Profesores</title>
</head>
<body>
	<h1>Crear Profesor</h1>
	<?= form_open('profesores/crear'); ?>
	<?= form_label('Nombre','nombre'); ?>
	<?= form_input('nombre','',['id'=>'nombre',"class"=>"form-control"]); ?>
	<?= form_label('Cedula','cedula'); ?>
	<?= form_input('cedula','',['id'=>'cedula',"class"=>"form-control"]); ?>
	<?= form_submit('Crear','Crear',['class'=>'btn btn-primary']); ?>
	<?= form_close(); ?>

	<?php if($msg!=""){?>
		<?= $msg ?>
	<?php } ?>

	<p><a href="<?php echo base_url(); ?>index.php/profesores/">Menu</a></p>
</body>
</html>