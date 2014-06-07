<h1>Identifique-se</h1>

<?php echo $this->Form->create('Usuario', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>

	<? echo $this->Form->input("usuario") ?>
	<? echo $this->Form->input("senha") ?>
<? echo $this->Form->end("Entrar") ?>