<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $confirmar_contrasena = $_POST['confirmar_contrasena'];
  

  if ($contrasena !== $confirmar_contrasena) {
    echo 'Las contraseñas no coinciden.';
  } else {
    $usuario = "$nombre,$apellido,$correo,$contrasena\n";
    $archivo = 'usuarios.txt';
    if (file_put_contents($archivo, $usuario, FILE_APPEND)) {
      echo 'Usuario registrado correctamente.';
    } else {
      echo 'Error al registrar el usuario.';
    }
  }
}
?>
