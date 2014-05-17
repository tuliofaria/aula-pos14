<h1>Lista de cds</h1>
<? 
$registros = 
	$this->getVar("registros");
 ?>
<ul>
	<?php foreach($registros as $r){ ?>
	<li><?php echo $r["titel"] ?></li>
	<?php } ?>
</ul>