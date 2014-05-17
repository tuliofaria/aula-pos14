<?php
	include("Controller.php");
	include("CdDAO.php");

	class CdController extends Controller {
		public function listar(){
			$cdDAO = new CdDAO();
			$registros = $cdDAO->query();
			$this->setVar("registros", $registros);
		}
		public function checkLogin(){
			if(!isset($_SESSION["user"])){
				header("Location: ?controller=Usuario&action=entrar");
				exit;
			}
		}
		public function novo(){
			$this->checkLogin();

			if(isset($_POST["titel"])){
				$cdDAO = new CdDAO();
				$cdDAO->insert(
					array(
						"titel"=>$_POST["titel"],
						"interpret"=>$_POST["interpret"],
						)
				);

				header("Location: ?controller=Cd&action=listar");
			}
		}
		public function excluir(){
			$cdDAO = new CdDAO();
			$cdDAO->delete($_GET["id"]);
			header("Location: ?controller=Cd&action=listar");
			exit;
		}

		public function editar(){
			$cdDAO = new CdDAO();
			if(isset($_POST["titel"])){
				$cdDAO->update($_GET["id"],
					array(
						"titel"=>$_POST["titel"],
						"interpret"=>$_POST["interpret"],
						)
				);

				header("Location: ?controller=Cd&action=listar");
			}else{
				$dados = $cdDAO->query(array("id"=>$_GET["id"]));
				$this->setVar("cd", $dados[0]);
			}
		}

	}