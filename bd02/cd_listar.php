<h1>Lista de cds</h1>
<? 
$registros = 
	$this->getVar("registros");
 ?>
<ul>
	<?php foreach($registros as $r){ ?>
	<li><?php echo $r["titel"] ?> 
		<a href="?controller=Cd&action=excluir&id=<?php echo $r["id"] ?>">
			excluir</a>
	</li>
	<?php } ?>
</ul>