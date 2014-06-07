<?
	class UsuariosController extends AppController{

		public $uses = array();

		public function login(){
			if($this->request->is("post")||$this->request->is("put")){
				if(($this->request->data["Usuario"]["usuario"]=="tulio")&&($this->request->data["Usuario"]["senha"]=="123")){
					
					$this->Session->write("logado", "sim");
					$this->redirect("/admin/alunos");
				}
			}
			
		}

	}