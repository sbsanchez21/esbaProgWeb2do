<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>


<body class="text-center bg-light">
  <?php require_once("menu.html") ?>

  <div class="container">

    <div class="py-4 text-center">
      <h2>Oradores</h2>
      <p class="lead">Listado de Oradores</p>
    </div>
    <?php 
    $mensaje=$_GET["mensaje"];
    if ($mensaje!="") {
      echo "<div class='bg-danger m-2 p-1'>";
      echo $mensaje;
      echo "</div>";
    }
    ?>

    
    <div class="text-start">
      <button class="btn btn-primary mb-3 " data-bs-toggle='modal' data-bs-target='#createModal' idDel='$id' nom='$nom' ape='$ape'>Agregar Orador</button>

    </div>
    <table class="table table-hover ">
      <thead class="table-dark">
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">email</th>
          <th scope="col">Operaciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $conn = new mysqli("localhost", "root", "", "esba2sem");
        $result = $conn->query("SELECT * FROM oradores");

        while ($orador = $result->fetch_assoc()) {
          echo "<tr>";

          $id = $orador["id"];
          echo "<td>";
          echo $id;
          echo "</td>";

          $nom = $orador["nombre"];
          echo "<td>";
          echo $nom;
          echo "</td>";

          $ape = $orador["apellido"];
          echo "<td>";
          echo $ape;
          echo "</td>";

          echo "<td>";
          echo $orador["email"];
          echo "</td>";

          echo "<td>";
          echo "<a href='#' data-bs-toggle='modal' data-bs-target='#deleteModal' idDel='$id' nom='$nom' ape='$ape'><i class='bi bi-trash3-fill mx-1'></i></a>";
          echo "<i class='bi bi-pencil-fill mx-1'></i>";
          echo "</td>";

          echo "</tr>";
        }


        ?>
      </tbody>

    </table>

  </div>

  <!-- create modal -->
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Alta Orador</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../controller/delOra.php" method="post">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">¿Desea eliminar el orador?</label>
              <div id="nomApe"></div>
              <input type="hidden" class="form-control" id="idDel" name="idDel">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- delete modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Orador</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../controller/delOra.php" method="post">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">¿Desea eliminar el orador?</label>
              <div id="nomApe"></div>
              <input type="hidden" class="form-control" id="idDel" name="idDel">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="js/listaOra.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>