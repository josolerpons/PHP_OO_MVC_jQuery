<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/jose2020/crud/';
 include($path . "module/home/model/DAOHome.php");
 
session_start();
    
    switch($_GET['op']){

        case 'list':
            include("module/home/view/list_home.html");
        break;

        case 'dades':
            try{
				$daohome = new DAOHome();
				$rlt = $daohome->select_home();
			} catch(Exception $e){
				echo json_encode("error");
			}

			if(!$rlt){
				echo json_encode("error");
			}
			else{
				$dinfo = array();
				foreach ($rlt as $row) {
					array_push($dinfo, $row);
				}
				echo json_encode($dinfo);
			}
			break;
			case 'countp':
				try {
					$daohome = new DAOHome();
					$rlt = $daohome->select_countp();
				} catch (Exception $e) {
					echo json_encode("error");
				}
		
				if (!$rlt) {
					echo json_encode("error");
				} else {
					$dinfo = array();
					foreach ($rlt as $row) {
						array_push($dinfo, $row);
					}
					echo json_encode($dinfo);
				}
				break;

				case 'productos';
				try {
					$daohome = new DAOHome();
					$rst = $daohome->select_products($_GET['limit']);
				} catch (Exception $e) {
					echo json_encode("error");
				}
		
				if (!$rst) {
					echo json_encode("error");
				} else {
					$inf = array();
					foreach ($rst as $row) {
						array_push($inf, $row);
					}
					echo json_encode($inf);
				}
				break;	

			case 'catalo':
				try{
					$daohome = new DAOHome();
					$rlt = $daohome->select_cat();
				} catch(Exception $e){
					echo json_encode("error");
				}
	
				if(!$rlt){
					echo json_encode("error");
				}
				else{
					$dinfo = array();
					foreach ($rlt as $row) {
						array_push($dinfo, $row);
					}
					echo json_encode($dinfo);
				}
				break;
   
			
		default:
			include("view/inc/error404.php");
			break;
    }