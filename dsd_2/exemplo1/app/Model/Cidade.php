<?php
	class Cidade extends AppModel{

		//public $hasMany = array("Aluno");
		
		public $belongsTo = array("Estado");

		public $displayField = "nome";



	}