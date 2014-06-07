<?php
	class AlunosController extends AppController{

		//public $scaffold;

		public function index() {
			$alunos = $this->Aluno->find("all");
			$this->set("alunos", $alunos);
		}

		public function novo() {
			if($this->request->is("post")||$this->request->is("put")){
				if($this->Aluno->save($this->request->data)){
					$this->Session->setFlash("Aluno criado com sucesso!");
					$this->redirect("/alunos");
				}
			}
		}

		public function excluir($id){
			$this->Aluno->delete($id);
			$this->Session->setFlash("Aluno excluído com sucesso!");
			$this->redirect("/alunos");
		}

	}