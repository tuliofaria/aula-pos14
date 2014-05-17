<?php	
	class DbConfig{
		private $configs = array(
					"default"=>array(
						"host"=>"localhost",
						"username"=>"root",
						"password"=>"",
						"database"=>"cdcol"
						)
				);
		public function getConfig($configName){
			return $this->configs[$configName];
		}
	}