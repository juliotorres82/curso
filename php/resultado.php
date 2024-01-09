<?php 
include "head2.html";
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$password = $_POST['contrasena'];


echo "<p>Mi nombre es: $nombre </p>";
echo "<p>Mi edad es: $edad </p>";
echo "<p>Mi correo es: $email </p>";
echo "<p>Mi contraseña es: $password </p>";
echo "<a href = 'index.php'>Back </a>"
?>