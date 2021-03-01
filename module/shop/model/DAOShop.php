<?php 
	$path = $_SERVER['DOCUMENT_ROOT'] . '/jose2020/crud/';
    include($path . "model/connect.php");
    
	class DAOShop{
		function select_shop(){
			$sql = "SELECT id,name,tipo,madein,codprod,img,count FROM productos ORDER BY count DESC";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function select_search($auto){
			$sql = "SELECT id,name,tipo,madein,codprod,img,count FROM productos WHERE name='$auto' ORDER BY count DESC";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}
		function count_shop($id){
			$sql = "UPDATE productos SET count=count+1 WHERE id='$id'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;

		}

		function select_countp(){
			$sql = " SELECT count(*) as allpages FROM productos";
	  
			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		  }

		  function select_products($limit){
			$sql = " SELECT * from productos order by count desc LIMIT $limit, 3";
		
			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		  }

		  function page_one(){
			$sql = " SELECT * from productos order by count desc LIMIT 0, 3";
		
			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		  }
		
		function count($cat){
			$sql = "UPDATE catalog SET count=count+1 WHERE tipo='$cat'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;

		}
		function select_user($user){
			$sql = "SELECT * FROM productos WHERE id='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		function select_cat($cat){
			$sql = "SELECT * FROM productos WHERE tipo='$cat'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;

		}
		function select_filt($checks){
			$sql = "SELECT * FROM productos $checks";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;

		}
		function select_map(){
			$sql = "SELECT * FROM maps";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}