<?php
//iniciar la sesion
session_start();
header('Content-Type: application/json');

// En una aplicación real, estas credenciales deberían estar almacenadas de forma segura
//esto sería una consulta a una bd
$valid_username = 'usuario';
$valid_password = 'contraseña';

//creamos dos variables locales con los datos que nos vienen por POST
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    //crea la sesion con nombre user y valor username
    //es una variable de sesion
    //esta sesion se puede utilizar en cualquier página del dominio actual
    $_SESSION['user'] = $username;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
