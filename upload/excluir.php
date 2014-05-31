<?
	unlink("arquivos/".$_GET["file"]);

	header("Location: index.php");