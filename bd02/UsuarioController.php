<?php
	include("Controller.php");

	class UsuarioController extends Controller{

		public function entrar(){
			if(isset($_POST["user"])){
				if($_POST["user"]=="tulio" && $_POST["pass"]=="123"){
					$_SESSION["user"] = $_POST["user"];				
				}else{
					echo "Senha invalida!";
				}

			}
		}

	}