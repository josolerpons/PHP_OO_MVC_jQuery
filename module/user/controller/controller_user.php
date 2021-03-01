<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/jose2020/crud/';
 include($path . "module/user/model/DAOUser.php");
 
    // include ("module/user/model/DAOUser.php");
    session_start();
    
    switch($_GET['op']){


        // case 'list';
        
        //     include("module/user/view/list_user.php");
        
        // break;


        case 'list';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_all_user();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/list_user.php");
    		}
            break;
            
        case 'create';

        // if ($_POST){

        //     // echo "hola";
        // }
       
            include("module/user/model/validate.php");
            
            $check = true;
            
            
            if ($_POST){
                // print_r("hola2");
              
                $check = true;
                $check=validate($_POST['codprod']);
                print_r($check);
                
                //$check2=validate2($_POST['codprod']);
                
                if ($check){
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
                        $rdo = $daouser->insert_user($_POST);
                        print_r("hola2");
                      
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }else{
                    $ep = "Error, el codigo ya existe";

                    // if ($check1){
                    // $ep1 = "Error, el codigo ya existe";
                    // }
                    // if ($check2){
                    //     $ep2 = "Error, el codigo ya existe";
                    //     }
                }
            }
       
            include("module/user/view/create_user.php");
            break;
            
        case 'update';
            include("module/user/model/validate.php");
            
            $check = true;
            
            if ($_POST){
                // echo "up1";
                $check = true;
                $check=validate2($_POST['codprod'], $_POST['id']);
                // echo "up";
                if ($check){
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->update_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
                $er = "Error, el codigo ya existe";
            }
            
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/user/view/update_user.php");
    		}
            break;
            
        case 'read';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/read_user.php");
    		}
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->delete_user($_GET['id']);
                                        
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_user&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
                }
                // echo $_GET['name'];           
            }
            // try{
            //     $daouser = new DAOUser();
            //     $rdo = $daouser->select_user($_GET['id']);
            //     $user=get_object_vars($rdo);
            // }catch (Exception $e){
            //     $callback = 'index.php?page=503';
            //     die('<script>window.location.href="'.$callback .'";</script>');
            // }
            
            // if(!$rdo){
            //     $callback = 'index.php?page=503';
            //     die('<script>window.location.href="'.$callback .'";</script>');
            // }else{
            //      include("module/user/view/delete_user.php");
            // }
            
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/delete_user.php");
    		}
            
            break;

        case 'deleteall':
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->delete_all_user();
                $callback = 'index.php?page=controller_user&op=list';
                die('<script>window.location.href="'.$callback .'";</script>');

            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            $callback = 'index.php?page=controller_user&op=list';
            include("module/user/view/list_user.php");
            // if(!$rdo){
            //     echo "no";
    		// 	$callback = 'index.php?page=503';
			//     die('<script>window.location.href="'.$callback .'";</script>');
    		// }else{
            //     include("module/user/view/list_user.php");
    		// }
            break;

            case 'read_modal':
                // echo $_GET["modal"]; 
                // exit;
                
                try{
                    $daouser = new DAOUser();
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

        default;
            include("view/inc/error404.php");
            break;
    }