<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body class="text-center bg-light">
  <?php require_once("menu.html") ?>

  <div class="container">
    <div class="py-4 text-center">
      <h2>Usuarios</h2>
      <p class="lead">Listado de Usuarios</p>
    </div>

    <table class="table table-hover ">
      <thead class="table-dark">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Usuario</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Rol</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $conn=new mysqli("localhost","root","","esba2sem");
        $result=$conn->query("SELECT * FROM usuarios");
        
        while ($usuario=$result->fetch_assoc()) {
            echo "<tr>";

            echo "<td>";
            echo $usuario["id"];            
            echo "</td>";

            echo "<td>";
            echo $usuario["user"];            
            echo "</td>";

            echo "<td>";
            echo $usuario["pass"];            
            echo "</td>";

            echo "<td>";
            echo $usuario["rol"];            
            echo "</td>";

            echo "</tr>";
        }

        
        ?>
      </tbody>

    </table>

  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>