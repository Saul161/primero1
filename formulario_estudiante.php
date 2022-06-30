<?php
require_once("Estudiante.php");
$estudiante=new estudiante();

if(isset($_GET['est_id'])){
$datos=$estudiante->edit($_GET['est_id']);
}else{
	$datos['est_id']=NULL;
	$datos['est_nombres']=NULL;
	$datos['est_apellido']=NULL;
	$datos['est_cedula']=NULL;
	$datos['est_edad']=NULL;
	$datos['est_ciudad']=NULL;
	$datos['est_genero']=NULL;
}


?>
<h1>ESTOY CREANDO UN FORMULARIO DE ESTUDIANTES</h1>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.contenedores{
		margin-top:5px;
		margin-left:100px
	}
	label{
		 background:#;
		 width:100px;
         float:left;
         font-family:Arial; 
         font-size:16px;
         border-bottom:solid 2px #ccc;

	}
	</style>
</head>
<body>
	<form action="acciones_estudiante.php" method="POST" >
		<input type="hidden" name="est_id" id="est_id" value="<?php echo $datos['est_id'] ?>" >

        <div class="contenedores">   
		     <label for="est_nombres">Nombres</label>
		     <input type="text" name="est_nombres" id="est_nombres" value="<?php echo $datos['est_nombres'] ?>" >
        </div>

        <div class="contenedores">
		     <label for="est_apellidos">Apellidos</label>
		     <input type="text" name="est_apellido" id="est_apellido"
		     value="<?php echo $datos['est_apellido']?>" >
		</div>

		<div class="contenedores">
		     <label for="est_cedula">Cedula</label>
		     <input type="text" name="est_cedula" id="est_cedula"
		     value="<?php echo $datos['est_cedula']?>" >
		</div>

		<div class="contenedores">
		     <label for="est_edad">Edad</label>
		     <input type="text" name="est_edad" id="est_edad"
		     value="<?php echo $datos['est_edad']?>">
		</div>

		<div class="contenedores"> 
		     <label for="est_ciudad">Ciudad</label>
		     <input type="text" name="est_ciudad" id="est_ciudad" 
		     value="<?php echo $datos['est_ciudad']?>">
		</div>

		<div class="contenedores">
		     <label for="est_genero">Genero</label>
		     <input type="text" name="est_genero" id="est_genero" 
		     value="<?php echo $datos['est_genero']?>">
	    </div>
             <button>Guardar</button>

	</form>
	
</body>
</html>