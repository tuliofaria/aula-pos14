<?

	session_start();

	$img = imagecreatetruecolor(300, 50);

	$bg = imagecolorallocate($img, 255, 255, 255);

	imagefill ($img , 0 , 0 , $bg );

	$textcolor = imagecolorallocate($img, 0, 0, 255);
	 

	function randString($tamanho){
		$codigo = "";
		for($i=0; $i<$tamanho; $i++){
			$codigo.=chr(rand(ord("A"), ord("Z")))." ";
		}
		return $codigo;
	}

	$codigo = randString(10);

	$_SESSION["codigo"] = str_replace(" ", "", $codigo);


	imagestring($img, 5, 0, 0, $codigo, $textcolor);

	Header("content-type: image/jpeg");
	imagejpeg($img);