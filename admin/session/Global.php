<?php

 /*  
 *
 * Class Query Controller
 *
 */
	
 class Controller{

	public function SQLConnection(){
		//$connection = array("server" => "localhost", "user" => "root", "password" => "", "database" => "payroll");
		$connection = array("server" => "mysqltestdb-mystix.c.aivencloud.com:12990" , "user" => "avnadmin", "password" => "AVNS_Oy08z4qFEeqForR2ds_", "database" => "defaultdb");
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
		$database = mysqli_select_db($this->SQLConnection(), 'defaultdb');
		return $database;
	}
}
?>
