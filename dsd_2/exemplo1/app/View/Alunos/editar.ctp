<h1>Alterar aluno</h1>

<?php echo $this->Form->create('Aluno', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<? echo $this->Form->input("nome") ?>
	<? echo $this->Form->input("email") ?>
	<? echo $this->Form->input("cidade_id") ?>
<? echo $this->Form->end("Salvar aluno") ?>