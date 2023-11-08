<?php 
$user=$_POST["user"];
$pass=$_POST["pass"];

// echo $user;
// echo $pass;

$conn=new mysqli("localhost","root","","esba2sem");
$result=$conn->query("SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'");

if ($result->fetch_assoc()) {
    header("Location: ../view/inicio.php"); 
} else {
    header("Location: ../view/error.php"); 
}

?>