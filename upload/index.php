<html>
	<head><title>UPLOAD</title></head>
	<body>

		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<input type="text" name="nome" />
			<input type="file" name="arquivo" />
			<input type="submit">
		</form>


		<?php
			$dir = "arquivos/";
			if (is_dir($dir)) {
			    if ($dh = opendir($dir)) {
			        while (($file = readdir($dh)) !== false) {
			        	if(($file!=".")&&($file!="..")&&(!preg_match('/.*_thumb.jpg/', $file))){
			        	?>
			        	<? $filenameThumb = str_replace(".jpg", "_thumb.jpg", $file); ?>
			        	<? if(is_file("arquivos/".$filenameThumb)){ ?>
			        	<img src="arquivos/<? echo $filenameThumb ?>" /><br>
			        	<? } ?>
			            <? echo $file; ?>

			            <a href="excluir.php?file=<? echo urlencode($file) ?>">excluir</a> <br>
			        	<? }
			        }
			        closedir($dh);
			    }
			}
		?>

	</body>
</html>