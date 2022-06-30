<?php
require_once('Usuarios.php');
$usuarios=new usuarios();
$datos=$_REQUEST;
//die(print_r($datos));

if(empty($datos['usu_id'])){//creo un nuevo estudiante

$usuarios->create($datos['usu_nombres'],
	                $datos['usu_edad'],
	                $datos['usu_ciudad'],
	                $datos['usu_cedula']);
}else{
	  if(isset($datos['usu_nombres'])){

	   $usuarios->update($datos['usu_nombres'],
	                $datos['usu_edad'],
	                $datos['usu_ciudad'],
	                $datos['usu_cedula'],$datos['usu_id']);
	   }else{///elimino
	    	
	    	$usuarios->delete($datos['usu_id']);
	        
	        }
     }

//redireccion de un archivo php
header('location:lista_usuarios.php');

?>