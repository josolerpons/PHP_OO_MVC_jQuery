<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/jose2020/crud/';
include($path . "model/connect.php");


    // include("model/connect.php");
    
	class DAOUser{
		function insert_user($datos){
			$codprod=$datos[codprod];
        	$name=$datos[name];
        	$madein=$datos[madein];
			$tipo=$datos[tipo];
			$reed=$datos[reed];
        	foreach ($datos[prov] as $indice) {
        	    $prov=$prov."$indice:";
        	}
        	$sql = " INSERT INTO productos (codprod, name, madein, tipo, reed, prov, img, genero, count)"
        		. " VALUES ('$codprod', '$name', '$madein', '$tipo', '$reed', '$prov', '','','0')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM productos ORDER BY id ASC";
			
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

		function select_user2($user){
			$sql = "SELECT * FROM productos WHERE codprod='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

		function select_user3($user, $id){
			$sql = "SELECT * FROM productos WHERE codprod='$user' AND id='$id'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			$id=$datos[id];
			$codprod=$datos[codprod];
        	$name=$datos[name];
        	$madein=$datos[madein];
			$tipo=$datos[tipo];
			$reed=$datos[reed];
			foreach ($datos[prov] as $indice) {
        	    $prov=$prov."$indice:";
        	}
        	
        	$sql = " UPDATE productos SET codprod='$codprod', name='$name', madein='$madein', tipo='$tipo', reed='$reed', prov='$prov' WHERE id='$id'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($user){
			$sql = "DELETE FROM productos WHERE id='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function delete_all_user(){
			$sql = "DELETE FROM productos";

		
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}