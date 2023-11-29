<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">

        <h3 class="text-center fs-3 m-3 ">Listado de Oradores traidos desde la DB</h3>

        <table class="table text-center">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <!-- estático -->
                <tr>
                    <td>1</td>
                    <td>jose</td>
                    <td>juares</td>
                    <td>jju@dsd</td>
                </tr>
                <!-- dinámico  -->
                <!-- me contecto a la db, traigo los usuarios y genero html dinámicamente -->
                <?php 
                    //ip o nombre server, usuario db, pass db, nom db
                    //$ delcara una variable
                    $conn=new mysqli("localhost", "root","","esba2sem");         

                    //hacemos una consulta la db y colocamos el resultado en la var $query
                    $query=$conn->query("SELECT * FROM oradores");        

                    //transforma el resultado $query array de array asociativo
                    while ($usuario=$query->fetch_assoc()) {
                        //$listalumnos es un array asociativo
                        $listOra[]=$usuario;
                    }

                    //obtengo la cant de usuarios
                    $cantOra=count($listOra);

                    //recorro el array $listOra para generar html 
                    for ($i=0; $i < $cantOra; $i++) { 
                        echo "<tr>";    

                        echo "<td>";    
                        echo $listOra[$i]["id"];
                        echo "</td>";

                        echo "<td>";    
                        echo $listOra[$i]["nombre"];
                        echo "</td>";

                        echo "<td>";    
                        echo $listOra[$i]["apellido"];
                        echo "</td>";

                        echo "<td>";    
                        echo $listOra[$i]["email"];
                        echo "</td>";

                        
                        echo "</tr>";
                    }

                    //cerrar conexión
                    $conn->close();
                ?>                  
                
                

            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="js/listUsu.js"></script>
</body>

</html>