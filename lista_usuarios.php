<?php
require_once('usuarios.php');
$usuarios=new usuarios();
$consulta=$usuarios->listar_usuarios();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lista_usuarios</title>
	<style>
		  th{
		    padding:5px;
		  	text-align: center;
		  	color: white;
		  	background: black;
		  }
		  th{
		  	text-align:center;
			color:white;
			padding: 8px;
			background:#5FC9E6;
			border: solid 2px white;
		  }
		  td{

			padding: 8px;
			border: solid 2px #black;

		  }
		  table{
                  width: 80%;
                  border-collapse:collapse;
		  }
		  a{
		  	background:#DB9065;
		 	color:white;
		 	border:solid 1px #595050;
		 	text-decoration:none;
		    font-family:cursiva;
		    text-align:center;
		    padding:5px;
		    border-radius:5px;

		  }
		  img{
		  	width:15px;
		  }
	</style>
</head>
<body>
	<h1 style="background:#55AC74;text-align:center;color:while;">LISTA USUARIOS</h1>
	<a href="formulario_usuarios.php">NUEVO  USUARIO</a>

	<table border="5",align="center">
		    <tr>
		    	<th>N°</th>
			         <th>NOMBRE</th>
			         <th>EDAD</th>
			         <th>CUIDAD</th>
			         <th>CEDULA</th>
			         <th>ACCIONES</th>
		    </tr>
		    

		  <style>
		  	th{
		    	text-align:center;
		    }
		  </style> 

          <?php
          $x=0;
          foreach($consulta as $c){
          	  $x++;
          	echo "<tr>
                         <td>$x</td>
                         <td>{$c['usu_nombres']}</td>
                         <td>{$c['usu_edad']}</td>
                         <td>{$c['usu_ciudad']}</td>
                         <td>{$c['usu_cedula']}</td>
                         <td>
                              <a href='formulario_usuarios.php?usu_id={$c["usu_id"]}'>
                                  <img src='lencil.png'
                              </a>
                              <a href='acciones_usuarios.php?usu_id={$c["usu_id"]}' onclick='return validar()' >
                                   <img src='del.png'
                              >/<a>
                         </td>
          	      </tr>";

          }
          ?>
	
	</table>
</body>
</html>
<script>
	
	function validar(){
		if(confirm("Desea Eliminar")){
			return true;
		}else{
			return false;
		}
	}
</script>