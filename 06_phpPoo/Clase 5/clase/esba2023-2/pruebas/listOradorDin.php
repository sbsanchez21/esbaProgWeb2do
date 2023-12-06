<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">email</th>
      </tr>
    </thead>
    <tbody>
      <!-- contectarme a la db, consultar los oradores y renderizar una fila x cada orador -->
      <?php
      $mysqli = new mysqli("localhost", "root", "", "esba2sem"); //localhost
      // $mysqli = new mysqli("https://databases-auth.000webhost.com/index.php?route=/database/structure&db=id15684327_prueba", "root", "", "id15684327_prueba"); //localhost
      

      $query = $mysqli->query("SELECT * from oradores");
      while ($or = $query->fetch_assoc()) {
        $listaOr[] = $or;
      }
      
      $cantOra=count($listaOr);

      for ($i=0; $i < $cantOra; $i++) { 
        echo "<tr>";

        echo "<td onclick='alert()'>";
        echo $listaOr[$i]["id"];
        echo "</td>";
      
        echo "<td>";
        echo $listaOr[$i]["nombre"];
        echo "</td>";      

        echo "<td>";
        echo $listaOr[$i]["apellido"];
        echo "</td>";

        echo "<td>";
        echo $listaOr[$i]["email"];
        echo "</td>";

        echo "</tr>";
      }

      ?>

    </tbody>
  </table>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>