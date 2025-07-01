<?php

 /*  
 *
 * Class Query Controller
 *
 */
	
 class Controller{

	public function SQLConnection(){
		$connection = array("server" => "localhost", "user" => "root", "password" => "", "database" => "payroll");
		//$connection = array("server" => "db.be-mons1.bengt.wasmernet.com", "user" => "13be0a517014800018eaef075af7", "password" => "068613be-0a51-7145-8000-f7d6a159548c", "database" => "payroll");
		$connections = mysqli_connect($connection["server"], $connection["user"], $connection["password"], $connection["database"]);
		return $connections;	
	}

	public function Connection($connection){
		if(!$connection){
			return false;
		}else{
			return true;
		}
	}

	public function Database(){
		$database = mysqli_select_db($this->SQLConnection(), 'payroll');
		return $database;
	}
}
?>