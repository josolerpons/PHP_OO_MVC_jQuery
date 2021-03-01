<?php 
	$path = $_SERVER['DOCUMENT_ROOT'] . '/jose2020/crud/';
    include($path . "model/connect.php");
    
	class DAOhome{
		function select_home(){
			$sql = "SELECT * FROM carousel";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}

		function select_cat(){
			$sql = "SELECT img,id,tipo FROM catalog LIMIT 1";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_countp(){
			$sql = " SELECT count(*) as allpages FROM catalog";
	  
			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		  }

		  function select_products($limit){
			$sql = " SELECT * from catalog order by id asc LIMIT $limit";
		
			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		  }
	}