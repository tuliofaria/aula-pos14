<h1>Novo aluno</h1>

<? echo $this->Form->create("Aluno") ?>
	<? echo $this->Form->input("nome") ?>
	<? echo $this->Form->input("email") ?>
<? echo $this->Form->end("Salvar aluno") ?>