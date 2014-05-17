<?php

	include("DbConfig.php");

	class DataAccess{
		private $conn;
		private $db;
		protected $table;

		public function __construct(){
			$dbConfig = new DbConfig();
			$config = $dbConfig->getConfig("default");

			$this->conn = mysql_connect($config["host"], $config["username"], $config["password"]);
			$this->db = mysql_select_db($config["database"], $this->conn);
		}

		public function query($conditions = array()){
			$table = $this->table;

			$whereStr = " 1=1 ";
			foreach($conditions as $field=>$c){
				$whereStr.=" and ".$field." = '".$c."' ";
			}

			$query = mysql_query("select * from ".$table." where ".$whereStr, $this->conn);
			$retorno = array();
			while($dados = mysql_fetch_array($query)){
				$retorno[] = $dados;
			}
			return $retorno;
		}
		public function insert($dados){
			$table = $this->table;
			$campos = array();
			foreach($dados as $field=>$value){
				$campos[] = $field;
				$dados[$field] = "'".$value."'";
			}
			$camposStr = implode(",",$campos);
			$valoresStr = implode(",", $dados);

			mysql_query("insert into $table ($camposStr) values($valoresStr)",$this->conn);
		}

		public function delete($id){
			$table = $this->table;
			mysql_query("delete from $table where id = $id",$this->conn);
		}

		public function update($id, $dados){
			$table = $this->table;
			foreach($dados as $field=>$value){
				$dados[$field] = $field." = '".$value."'";
			}
			$valoresStr = implode(",", $dados);

			mysql_query("update $table set $valoresStr where id = $id",$this->conn);
		}

	}