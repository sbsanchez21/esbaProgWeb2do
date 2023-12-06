<?php 

$nomAdd=$_POST["nomAdd"];
$apeAdd=$_POST["apeAdd"];
$emailAdd=$_POST["emailAdd"];
$fotoAdd=$_POST["fotoAdd"];

echo $fotoAdd;
$conn=new mysqli("localhost","root","","esba2sem");
$insertOk=$conn->query("INSERT INTO oradores (nombre, apellido, email) VALUES ('$nomAdd','$apeAdd','$emailAdd') ");

if ($insertOk) {
    header("Location: ../view/listaOra.php?mensaje=El%20orador%20se%20agregó%20exitosamente"); 
} else {
    header("Location: ../view/listaOra.php?mensaje=El%20orador%20no%20se%20puedo%20crear"); 
}

?>