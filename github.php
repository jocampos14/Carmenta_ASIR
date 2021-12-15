<!doctype html>
 <html lang="es">
    <head>
        <meta charset="utf-8">
            <title>Título</title>
    </head>
    <body>
         <!-- muestra un número aleatorio de dos -->
        <?php
            $numero=mt_rand(0,1);
            if ($numero==0) echo "<img src='Imagenes/img1.jpg'>";
            else echo "<img src='Imagenes/img2.jpg'>";
            echo "cositas";
        ?>
    </body>
</html>
