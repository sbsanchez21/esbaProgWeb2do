<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    
    <?php 
        //conecto a la db
        //traigo todos los oradores
        //creo una tr x cada orador
        $mysqli = new mysqli("localhost", "root", "", "esba2sem"); //localhost

        // ejecutamos consulta sql en mysql
        $query = $mysqli->query("SELECT * from oradores");

        // devuelve false si $query está vacío
        // devuelve true si $query no está vacío y retorna un array asociativo
        while ($resultado = $query->fetch_assoc()) {
            $usuarios[] = $resultado;
        }


        echo "<div>Lorem ipsum dolor sit amet.</div>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>