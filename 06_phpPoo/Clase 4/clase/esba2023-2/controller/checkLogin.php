<?php 
$user=$_POST["user"];
$pass=$_POST["pass"];

// echo $user;
// echo $pass;

$conn=new mysqli("localhost","root","","esba2sem");
$result=$conn->query("SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'");

if ($usuario=$result->fetch_assoc()) {
    $rol=$usuario["rol"];
    if ($rol=="admin") {
        header("Location: ../view/listaOra.php"); 
    }else {
        header("Location: ../view/inicio.php?id="); 
    }
    

} else {
    header("Location: ../view/login.php?mensaje=Datos%20incorrectos"); 
}

?>