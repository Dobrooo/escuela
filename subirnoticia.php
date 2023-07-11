<?php

include("conexion2.php"); // Cargar codigo desde otro archivo



//Declaración de variables
$titulo=$_POST['titulo'];
$fecha=$_POST['fecha'];
$articulo=$_POST['articulo'];
$imagen=$_POST['imagen'];
$clave=$_POST['clave'];


//Insertar nuestros datos en la base de datos
$insertar = "INSERT INTO articulos (titulo,fecha,articulo,imagen) 
        VALUES ('$titulo','$fecha','$articulo','$imagen')";

$corroborar = "SELECT * FROM claves WHERE clave = '$clave'";
$resulta2 = $conexion2->query($corroborar);


function redirect($url) {
    header('Location: '.$url);
    die();
}




if ($resulta2->num_rows >0){
    
    
    while ($row = $resulta2->fetch_assoc()) {
        // Access the data in each row
        $columnValue = $row["clave"];
        // Do something with the data
        $resultado = mysqli_query($conexion2,$insertar); 
        header('location: index.php');
   }
}
  else{
   echo("Clave incorrecta.");
  }

?>

