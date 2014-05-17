<?php
	class MinhaClasse{
		private $name = "Tulio";
		public $lastName = "Faria";

		public function getFullName(){
			return $this->name." ".$this->lastName;
		}
	}

	$klass = "MinhaClasse";

	$obj = new $klass();
	echo $obj->getFullName();