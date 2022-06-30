<?php
require_once('Conection.php');
class Usuarios extends Conection{
           
           function listar_usuarios(){
          	$resultado=$this->con->query("SELECT * FROM usuarios" );
          	return $resultado->fetch_all(MYSQLI_ASSOC);//
            }
            
    function create($usu_nombres,$usu_edad,$usu_ciudad,$usu_cedula){
    return $this->con->query("INSERT INTO usuarios(usu_nombres,
    	                                         usu_edad,
                                                 usu_ciudad,
                                                 usu_cedula) 
                                           values('$usu_nombres',
                                                  '$usu_edad',
                                                  '$usu_ciudad',
                                                  '$usu_cedula')


                        
                           ");  

     }
     function edit($usu_id){

     	$resultado=$this->con->query("SELECT * FROM usuarios WHERE usu_id=$usu_id");
     	return $resultado->fetch_all(MYSQLI_ASSOC)[0]; 
     }
          function update($usu_nombre,$usu_edad,$usu_ciudad,$usu_cedula,$usu_id){
              $this->con->query("UPDATE usuarios 
              	                 SET usu_nombres='$usu_nombres',
                                  usu_edad='$usu_edad',
                                  usu_ciudad='$usu_ciudad',
                                  usu_cedula='$usu_cedula'
                                  WHERE usu_id=$usu_id


              ");
    }

     function delete($usu_id){
           $this->con->query("DELETE FROM usuarios WHERE usu_id=$usu_id");
     }


} 

?>