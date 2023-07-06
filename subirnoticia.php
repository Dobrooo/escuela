<?php

include("conexion2.php"); // Cargar codigo desde otro archivo



//Declaración de variables
$titulo=$_POST['titulo'];
$fecha=$_POST['fecha'];
$articulo=$_POST['articulo'];




//Insertar nuestros datos en la base de datos
$insertar = "INSERT INTO articulos (titulo,fecha,articulo) 
VALUES ('$titulo','$fecha','$articulo')";
$resultado = mysqli_query($conexion2,$insertar); 


function redirect($url) {
    header('Location: '.$url);
    die();
}



if ($resultado){
    
    
    header("Location: index.php");
    exit();
   }
   
  else{
   
  }

?>

