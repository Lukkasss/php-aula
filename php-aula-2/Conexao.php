<?php

include("Config.php");

	class Conexao{

	private static $instance;
	public static function getInstance(){
		if(!isSet(self::$instance)){
			try{
				self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}

		return self::$instance();
	}
}

?>