<?php
	include("UsuarioDAO.php");
	include("Controller.php");

	class UsuarioController extends Controller{

		public function entrar(){
			if(isset($_POST["user"])){
				$usuarioDAO = new UsuarioDAO();
				$users = $usuarioDAO->query(
					array(
						"user"=>$_POST["user"]
					)
				);
				if(count($users)>0){
					if($users[0]["passwd"]==$_POST["pass"]){
						$_SESSION["user"] = $_POST["user"];
					}else{
						echo "Usuario ou Senha invalida!";
					}
				}else{
					echo "Usuario ou Senha invalida!";
				}
			}
		}

	}