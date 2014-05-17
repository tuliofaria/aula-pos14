<?php
	include("DataAccess.php");

	class UsuarioDAO extends DataAccess{
		public function __construct(){
			parent::__construct();
			$this->table = "usuarios";
		}
	}