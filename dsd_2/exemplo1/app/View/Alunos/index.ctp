<h1>Alunos</h1>

<p>
	<a href="<? echo $this->Html->url("/alunos/novo") ?>" class="btn btn-info">Novo aluno</a>
</p>

<table class="table table-striped table-bordered">
	<tr>
		<th>Nome</th>
		<th>Ações</th>
	</tr>
	<? foreach($alunos as $a){ ?>
		<tr>
			<td><? echo $a["Aluno"]["nome"] ?></td>
			<td>
				<div class="btn-group">
					<a href="<? echo $this->Html->url("/alunos/editar/".$a["Aluno"]["id"]) ?>" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></a>

					<a href="<? echo $this->Html->url("/alunos/excluir/".$a["Aluno"]["id"]) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
			</td>
		</tr>
	<? } ?>
</table>