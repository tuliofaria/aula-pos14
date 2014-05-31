<?
	session_start();
	if($_SESSION["codigo"]==$_POST["nome"]){
		echo "OKAY";
	}else{
		echo "ERRADO";
	}