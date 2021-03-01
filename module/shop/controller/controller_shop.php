<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/jose2020/crud/';
 include($path . "module/shop/model/DAOShop.php");
 
session_start();
    
    switch($_GET['op']){

        case 'list':
            include("module/shop/view/list_shop.html");
        break;

		case 'countp':
			try {
				$daoshop = new DAOShop();
				$rlt = $daoshop->select_countp();
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

			case 'pageone';
			try {
				$daoshop = new DAOShop();
				$rst = $daoshop->page_one();
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
			case 'productos';
			try {
				$daoshop = new DAOShop();
				$rst = $daoshop->select_products($_GET['limit']);
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
        case 'list_all':
            try{
				$daoshop = new DAOShop();
				$rlt = $daoshop->select_shop();
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
				
			case 'list_search':
				// echo json_encode($_GET['auto']);
				// exit;
				try{
					$daoshop = new DAOShop();
					$rlt = $daoshop->select_search($_GET['auto']);
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
				
				case 'details':
					// echo $_GET["modal"]; 
					// exit;
					
					try{
						$daouser = new DAOShop();
						$rdo = $daouser->count_shop($_GET['modal']);
	
						$rdo = $daouser->select_user($_GET['modal']);
					}catch (Exception $e){
						echo json_encode("error");
						exit;
					}
					if(!$rdo){
						echo json_encode("error");
						exit;
					}else{
						$user=get_object_vars($rdo);
						echo json_encode($user);
						//echo json_encode("error");
						exit;
					}
					break;
					
				
				case 'cat':

					try{
						$daoshop = new DAOShop();
						$rdo = $daoshop->select_cat($_GET['tipo']);
					}catch (Exception $e){
						echo json_encode("errordd");
						exit;
					}
					// echo json_encode($rdo);
					// exit;
					if(!$rdo){
						// echo json_encode($rdo);
						// exit;
						echo json_encode("errorgg");
						exit;

					}else{
	
					$datainfo = array ();
					foreach ($rdo as $row) {
						array_push($datainfo, $row);
					}
					echo json_encode($datainfo);
					exit;
					}
				break;
     
				case 'filter':

					try{
						$daoshop = new DAOShop();
						$rpo = $daoshop->select_filt($_GET['checks']);
					}catch (Exception $e){
						echo json_encode("errordd");
						exit;
					}
					// echo json_encode($rdo);
					// exit;
					if(!$rpo){
						// echo json_encode($rdo);
						// exit;
						echo json_encode("errorgg");
						exit;

					}else{
	
					$datainfo = array ();
					foreach ($rpo as $row) {
						array_push($datainfo, $row);
					}
					echo json_encode($datainfo);
					exit;
					}
				break;


					case 'maps':
									
					try{
						$daoshop = new DAOShop();
						$rpo = $daoshop->select_map();
					}catch (Exception $e){
						echo json_encode("errordd");
						exit;
						}
														
					if(!$rpo){
															
					echo json_encode("errorgg");
					exit;
										
					}else{
											
					$datainfo = array ();
					foreach ($rpo as $row) {
					array_push($datainfo, $row);
					}
					echo json_encode($datainfo);
					exit;
					}
					break;



		default:
			include("view/inc/error404.php");
			break;
    }