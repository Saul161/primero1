<?php
require_once('Estudiante.php');
$estudiante=new Estudiante();
$datos=$_REQUEST;
//die(print_r($datos));

if(empty($datos['est_id'])){//creo un nuevo estudiante

$estudiante->create($datos['est_nombres'],
	                $datos['est_apellido'],
	                $datos['est_cedula'],
	                $datos['est_edad'],
	                $datos['est_ciudad'],
	                $datos['est_genero']);

}else{
	  if(isset($datos['est_nombres'])){

	   $estudiante->update($datos['est_nombres'],
	                $datos['est_apellido'],
	                $datos['est_cedula'],
	                $datos['est_edad'],
	                $datos['est_ciudad'],
	                $datos['est_genero'],$datos['est_id']);

	    }else{///elimino
	    	//die(($datos['est_id']));
	    	$estudiante->delete($datos['est_id']);
	    }
     }

//redireccion de un archivo php
header('location:lista_estudiante.php');

?>