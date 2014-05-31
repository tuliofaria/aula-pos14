<?
	$file = $_GET["file"];

	unlink("arquivos/".$file);

	$filenameThumb = str_replace(".jpg", "_thumb.jpg", $file);
	if(is_file("arquivos/".$filenameThumb)){
		unlink("arquivos/".$filenameThumb);
	}

	header("Location: index.php");