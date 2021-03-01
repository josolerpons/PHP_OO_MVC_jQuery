<?php
	$path = $_SERVER['DOCUMENT_ROOT'] . '/jose2020/crud/';
   include($path . "model/connect.php");

    class DAOsearch{
        function readProvince(){
            $sql = "SELECT DISTINCT tipo FROM productos ORDER BY tipo ASC";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
         }

         function readMuni($provi){
            $sql = "SELECT DISTINCT genero FROM productos WHERE tipo='$provi' ORDER BY genero ASC";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
         }

         function autocomplete(){
            $val = $_POST['auto'];
            $local = $_POST['drop2'];
            $tipo = $_POST['drop1'];
            $sql = "SELECT *  FROM productos WHERE tipo='$tipo' AND genero='$local'  and name LIKE '".$val. "%'";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
         }
    }
