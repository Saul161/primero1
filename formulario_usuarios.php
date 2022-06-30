<?php
require_once("Usuarios.php");
$usuarios=new usuarios();

if(isset($_GET['usu_id'])){
$datos=$usuarios->edit($_GET['usu_id']);
}else{
	$datos['usu_id']=NULL;
	$datos['usu_nombres']=NULL;
	$datos['usu_edad']=NULL;
	$datos['usu_ciudad']=NULL;
	$datos['usu_cedula']=NULL;

}


?>
<h1>ESTOY CREANDO UN FORMULARIO DE USUARIOS</h1>
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
	<form action="acciones_usuarios.php" method="POST" >
		<input type="hidden" name="usu_id" id="usu_id" value="<?php echo $datos['usu_id'] ?>" >

        <div class="contenedores">   
		     <label for="usu_nombres">Nombres</label>
		     <input type="text" name="usu_nombres" id="usu_nombres" value="<?php echo $datos['usu_nombres'] ?>" >
        </div>

        <div class="contenedores">   
		     <label for="usu_edad">Edad</label>
		     <input type="text" name="usu_edad" id="usu_edad" value="<?php echo $datos['usu_edad'] ?>" >
        </div>


		<div class="contenedores"> 
		     <label for="usu_ciudad">Ciudad</label>
		     <input type="text" name="usu_ciudad" id="usu_ciudad" 
		     value="<?php echo $datos['usu_ciudad']?>">
		</div>

		<div class="contenedores">
		     <label for="usu_cedula">Cedula</label>
		     <input type="text" name="usu_cedula" id="usu_cedula"
		     value="<?php echo $datos['usu_cedula']?>" >
		</div>
             <button>Guardar</button>

	</form>
	
</body>
</html>