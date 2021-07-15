<?php 
	class Db{
		private static $conexion=null;
		private function __construct(){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=**.;dbname=tributar','tributar1','Bogot418*',$pdo_options);
			return self::$conexion;
		}
	}
?>