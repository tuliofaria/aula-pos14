<?
	$filename = "arquivos/".time()."_".$_FILES["arquivo"]["name"];
	move_uploaded_file($_FILES["arquivo"]["tmp_name"], $filename);

	if($_FILES["arquivo"]["type"]=="image/jpeg"){
		// redimensionar

		$sizes = getimagesize($filename);

		$newWidth = $sizes[0]*0.5;
		$newHeight = $sizes[1]*0.5;

		// 250x120

		$img1 = imagecreatefromjpeg($filename);
		$img2 = imagecreatetruecolor($newWidth, $newHeight);

		imagecopyresized($img2, $img1, 0, 0, 0, 0, $newWidth, $newHeight, $sizes[0], $sizes[1]);

		//Header("content-type: image/jpeg");
		//imagejpeg($img2);

		$filenameThumb = str_replace(".jpg", "_thumb.jpg", $filename);
		imagejpeg($img2, $filenameThumb);



		//echo $newWidth."x".$newHeight;

		//print_r($sizes);




	}


	//header("Location: index.php");
?>