<?php
include ("conexion2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EESTN2 Emilio Rebuelto</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
</head>
<body>  
        <nav>
            <p class="textonav"><a href="index.php"><img src="img/Sin nombre.png" alt=""></a></p>            
            <a class="enlacenav" href="consultas.html">Consultas</a>
            <a class="enlacenav" href="programas.html">Programas de Materias</a>
            <a class="enlacenav" href="https://sites.google.com/view/bibliotecadelaeestn2020">Biblioteca</a>
            <a class="enlacenav" href="https://www.instagram.com/tecnica2berisso/?hl=es-la" target="_blank">Instagram</a>
        </nav>
       
        <div class="principal">
        <h1>Novedades</h1>
            <?php
            $consulta="SELECT * from articulos";
            $resultado=mysqli_query($conexion2,$consulta);

            while($mostrar=mysqli_fetch_array($resultado)){
                ?>

            <section>
                
                <h2><?php echo $mostrar['titulo']?></h2>
                <p class="fecha"><?php echo $mostrar['fecha']?></p>
                <p class="descripcion"><?php echo $mostrar['articulo']?></p>
            </section>
        <?php
        }
        ?>
        </div>
</body>
</html>