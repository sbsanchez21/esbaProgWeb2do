<?php 
$idDel=$_POST["idDel"];


echo $idDel;

$conn=new mysqli("localhost","root","","esba2sem");
$deleteOk=$conn->query("DELETE FROM oradores WHERE id=$idDel");

if ($deleteOk) {
    header("Location: ../view/listaOra.php?mensaje=El%20orador%20se%20eliminó%20exitosamente"); 
} else {
    header("Location: ../view/listaOra.php?mensaje=El%20orador%20no%20se%20puedo%20eliminar"); 
}

?>