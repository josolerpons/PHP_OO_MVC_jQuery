<?php
	class connect{
		public static function con(){
			$host = '127.0.0.1';  
    		$user = "admin";                     
    		$pass = "belgida2";                             
    		$db = "prod2";                      
    		// $port = 3306;                           
    		$tabla="productos";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}