<?php
	include("DataAccess.php");

	class CdDAO extends DataAccess{
		public function __construct(){
			parent::__construct();
			$this->table = "cds";
		}
	}