<?php

include("conexion.php"); // Cargar codigo desde otro archivo

//Declaración de variables
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$curso=$_POST['curso'];
$consulta=$_POST['consulta'];


//Insertar nuestros datos en la base de datos
$insertar = "INSERT INTO consultas (nombre,curso,correo,consulta) 
VALUES ('$nombre','$curso','$correo','$consulta')";
$resultado = mysqli_query($conexion,$insertar); 

        
function redirect($url) {
    header('Location: '.$url);
    die();
}



if ($resultado){
    
    
    header("Location: index.html");
    exit();
   }
   
  else{
   
  }

?>


        