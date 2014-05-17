<?php
	class Controller{

		protected $controller;
		protected $action;

		private $vars = array();

		public function setVar($name, $value){			
			$this->vars[$name] = $value;
		}
		public function getVar($name){
			return $this->vars[$name];
		}

		public function setController($controller){
			$this->controller = $controller;
		}
		public function setAction($action){
			$this->action = $action;
		}
		public function render(){
			include(strtolower($this->controller)."_".$this->action.".php");
		}

		public function beforeAction(){
		}
		public function afterAction(){
		}
	}