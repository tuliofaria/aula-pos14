<?
	$filename = "arquivos/".time()."_".$_FILES["arquivo"]["name"];
	move_uploaded_file($_FILES["arquivo"]["tmp_name"], $filename);

	if($_FILES["arquivo"]["type"]=="image/jpeg"){
		// redimensionar

		$sizes = getimagesize($filename);

		$newWidth = $sizes[0]*0.5;
		$newHeight = $sizes[1]*0.5;

		$altura = $sizes[1];
		$largura = $sizes[0];

		// 250x120

		// 1024 x 768

		function calc1($largura, $altura){
			$ratio = $largura/$altura;
			if($ratio<1){
				$newHeight = 120;
				$newWidth = 120*$ratio;
			}else{
				$newWidth = 250;
				$newHeight = 250*$ratio;
			}
			if($newHeight>120){
				$newHeight = 120;
				$newWidth = $newHeight*$ratio;
			}

			if($newWidth>250){
				$newWidth = 250;
				$newHeight = $newWidth*$ratio;
			}
			//echo "Calc1:".$newWidth."x".$newHeight."<br>";
			return array("w"=>$newWidth, "h"=>$newHeight);
		}

		function calc2($largura, $altura){
			$ratio1 = $largura/250;
			$ratio2 = $altura/120;

			$ratio = $ratio1;
			if($ratio2>$ratio1){
				$ratio = $ratio2;
			}

			$newHeight = $altura/$ratio;
			$newWidth = $largura/$ratio;
			//echo "Calc2:".$newWidth."x".$newHeight."<br>";
			return array("w"=>$newWidth, "h"=>$newHeight);
		}

		$novos = calc1($largura, $altura);

		$img1 = imagecreatefromjpeg($filename);
		$img2 = imagecreatetruecolor($novos["w"], $novos["h"]);

		imagecopyresized($img2, $img1, 0, 0, 0, 0, $novos["w"], $novos["h"], $sizes[0], $sizes[1]);

		//Header("content-type: image/jpeg");
		//imagejpeg($img2);

		$filenameThumb = str_replace(".jpg", "_thumb.jpg", $filename);
		imagejpeg($img2, $filenameThumb);



		//echo $newWidth."x".$newHeight;

		//print_r($sizes);

		header("Location: index.php");


	}


	//header("Location: index.php");
?>