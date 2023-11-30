<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="./master.css">
</head>
<body>
    <h1>Buscador</h1>
    <h2>Buscar en la tabla</h2>
    <input type="text" id="serchInput"
    placeholder="Buscar...">



    <table id="myTable">
<thead>
    <tr>
    <th>nombre</th>
    <th>edad</th>
    <th>ciudad</th>
    </tr>
</thead>
<tbody>
    <?php
    $conexion = mysqli_connect("localhost", "root" , "", "buscador");
    $peticion= "SELECT * FROM `4` ";
    $respuesta = mysqli_query($conexion,$peticion);
    while($fila = mysqli_fetch_array($respuesta)){
        ?>

    <tr>
        <td><?php echo $fila['nombre']?></td>
        <td><?php echo $fila['nombre']?></td>
        <td><?php echo $fila['nombre']?></td>
    </tr>
        <?php
    }
    ?>
    
   
    
</tbody>
    </table>
    <script src="./master.js"></script>

    
</body>
</html>