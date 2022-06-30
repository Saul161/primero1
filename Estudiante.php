<?php
require_once('Conection.php');
class Estudiante extends Conection{
           
           function listar_estudiante(){
          	$resultado=$this->con->query("SELECT * FROM estudiante ");
          	return $resultado->fetch_all(MYSQLI_ASSOC);//
            }

   function create($est_nombres,$est_apellido,$est_cedula,$est_edad,$est_ciudad,$est_genero){
    return $this->con->query("INSERT INTO estudiante(est_nombres,
                                                 est_apellido,
                                                 est_cedula,
                                                 est_edad,
                                                 est_ciudad,
                                                 est_genero) 
                                           values('$est_nombres',
                                                  '$est_apellido',
                                                  '$est_cedula',
                                                  '$est_edad',
                                                  '$est_ciudad',
                                                  '$est_genero' ) 
                        
                        ");  

     }
     function edit($est_id){

     	$resultado=$this->con->query("SELECT * FROM estudiante WHERE est_id=$est_id");
     	return $resultado->fetch_all(MYSQLI_ASSOC)[0]; 
     

     }

     function update($est_nombres,$est_apellido,$est_cedula,$est_edad,$est_ciudad,$est_genero,$est_id){
              $this->con->query("UPDATE estudiante 
              	                 SET est_nombres='$est_nombres',
              	                  est_apellido='$est_apellido',
                                  est_cedula='$est_cedula',
                                  est_edad='$est_edad',
                                  est_ciudad='$est_ciudad',
                                  est_genero='$est_genero'
                                  WHERE est_id=$est_id


              ");
    }
     function delete($est_id){
     	     //die($est_id);
           $this->con->query("DELETE  FROM estudiante WHERE est_id=$est_id");
     }

} 


?>