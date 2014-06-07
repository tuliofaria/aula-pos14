<?php
	class AlunosController extends AppController{

		//public $scaffold;
		public $uses = array("Aluno", "Cidade");

		public function admin_index() {
			//$alunos = $this->Aluno->find("all");
			$this->Aluno->recursive = 2;
			$alunos = $this->paginate("Aluno");
			$this->set("alunos", $alunos);
		}

		public function novo() {
			$this->set("cidades", $this->Cidade->find("list"));

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

		public function editar($id){
			$this->set("cidades", $this->Cidade->find("list"));

			if($this->request->is("post")||$this->request->is("put")){
				
				$this->Aluno->id = $id;
				// ou
				$this->request->data["Aluno"]["id"] = $id;

				if($this->Aluno->save($this->request->data)){
					$this->Session->setFlash("Aluno alterado com sucesso!");
					$this->redirect("/alunos");
				}
			}else{
				$this->request->data = $this->Aluno->findById($id);
			}
		}


	}