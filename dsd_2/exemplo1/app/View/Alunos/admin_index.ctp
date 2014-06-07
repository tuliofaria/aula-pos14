<h1>Alunos</h1>

<p>
	<a href="<? echo $this->Html->url("/alunos/novo") ?>" class="btn btn-info">Novo aluno</a>
</p>

<p>Mostrar: <a href="<? echo $this->Html->url("/alunos/index/limit:1") ?>">10</a>
 | <a href="<? echo $this->Html->url("/alunos/index/limit:20") ?>">20
 | <a href="<? echo $this->Html->url("/alunos/index/limit:50") ?>">50</a>
 | <a href="<? echo $this->Html->url("/alunos/index/limit:100") ?>">100</a>
</p>

<table class="table table-striped table-bordered">
	<tr>
		<th>Nome</th>
		<th>Cidade/UF</th>
		<th>Ações</th>
	</tr>
	<? foreach($alunos as $a){ ?>
		<tr>
			<td>
				<? echo $a["Aluno"]["nome"] ?>
			</td>
			<td>
				<? echo $a["Cidade"]["nome"] ?> / <? echo $a["Cidade"]["Estado"]["nome"] ?>
			</td>
			<td>
				<div class="btn-group">
					<a href="<? echo $this->Html->url("/alunos/editar/".$a["Aluno"]["id"]) ?>" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>

					<a href="<? echo $this->Html->url("/alunos/excluir/".$a["Aluno"]["id"]) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
			</td>
		</tr>
	<? } ?>
</table>

<? echo $this->Paginator->numbers() ?>