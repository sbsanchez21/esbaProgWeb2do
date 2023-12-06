<?php 
$idUpd=$_POST["idUpd"];
$nomUpd=$_POST["nomUpd"];
$apeUpd=$_POST["apeUpd"];
$emailUpd=$_POST["emailUpd"];


$conn=new mysqli("localhost","root","","esba2sem");
$updateOk=$conn->query("UPDATE oradores SET nombre='$nomUpd', apellido='$apeUpd', email='$emailUpd' WHERE id=$idUpd");

if ($updateOk) {
    header("Location: ../view/listaOra.php?mensaje=El%20orador%20se%20modificó%20exitosamente"); 
} else {
    header("Location: ../view/listaOra.php?mensaje=El%20orador%20no%20se%20puedo%20modificar"); 
}

?>