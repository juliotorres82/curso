<?php include 'head.html';?>
<form action="resultado.php" method="post">
    <input type="text" id="name" name="nombre" placeholder="Nombre: "  required>
    <input type="number" id="edad" name="edad" placeholder="Edad: "  required>
    <input type="email" id="email" name="email" placeholder="Correo: "  required>
    <input type="password" id="contrasena" name="contrasena" placeholder="Password: "  required>
    <input type="submit" value="Enviar">
</form>
